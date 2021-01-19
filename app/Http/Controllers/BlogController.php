<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Featured_Campaign;
use App\Campaign;
use App\Partner;
use App\About;
use App\Post;
use App\User;
use Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$posts = Post::all();

        $posts = Post::orderBy('id','DESC')->paginate(4);

        $fcampaigns = Featured_Campaign::all();

        $campaigns = Campaign::all();

        $partners = Partner::all();

        $abouts = About::all();

        return view('blog.index', compact('posts', 'fcampaigns', 'campaigns', 'partners', 'abouts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $posts = Post::where('slug','=', $slug)->firstOrFail();

        $fcampaigns = Featured_Campaign::all();

        $campaigns = Campaign::all();

        $partners = Partner::all();

        $abouts = About::all();

        return view('blog.show',compact('users', 'posts', 'fcampaigns', 'campaigns', 'partners', 'abouts'));
    }
}
