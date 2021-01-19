<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post_Category;
use App\Post;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:ver-post');
         $this->middleware('permission:crear-post', ['only' => ['create','store']]);
         $this->middleware('permission:editar-post', ['only' => ['edit','update']]); 
         $this->middleware('permission:eliminar-post', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Post::search($request->get('criteria'))->orderBy('id','DESC')->paginate(8);

        return view('admin.posts.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 8);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::orderBy('id', 'asc')->pluck('title', 'id');

        $categories = Post_Category::orderBy('id', 'asc')->pluck('name', 'id');

        return view('admin.posts.new', compact('posts', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = new Post();
        $posts->title           = $request->input('title');
        $posts->slug            = str_slug($request->get('title'));
        $posts->content         = $request->input('content');
        $posts->category_id     = $request->input('category_id');
        $posts->user_id         = $request->input('user_id');
        $posts->save();

        // Handle the client upload image id avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(770, 500)->save( public_path('uploads/posts/' . $filename ) );

            $posts->avatar = $filename;
            $posts->save();
        }

        return redirect()->route('publicacion.index')
                        ->with('success','Publicación creada correctamente!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
        $post = Post::find($id);

        $categories = Post_Category::orderBy('id', 'asc')->pluck('name', 'id');

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updated = Post::findorFail($id);

        $post = $request->all();

        $updated->fill($post)->save();

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(770, 500)->save( public_path('uploads/posts/' . $filename ) );

            $updated->avatar = $filename;
            $updated->save();
        }

        return redirect()->route('publicacion.index')
                        ->with('success','Publicación actualizada correctamente!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);  
        
        //dd($posts);

        return view('admin.posts.show',compact('posts'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Post::find($id)->delete();

        $post = Post::findOrFail($id);
        unlink(public_path('uploads/posts/') . $post->avatar);        
        $post->delete();

        return redirect()->route('publicacion.index')
                        ->with('success','Publicación eliminada!!!');
    }
}
