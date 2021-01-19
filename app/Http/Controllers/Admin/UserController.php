<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Notifications\UserNotification;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Province;
use App\User;
use Storage;
use Image;
use Hash;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:ver-usuario');
         $this->middleware('permission:crear-usuario', ['only' => ['create','store']]);
         $this->middleware('permission:editar-usuario', ['only' => ['edit','update']]); 
         $this->middleware('permission:eliminar-usuario', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::search($request->get('criteria'))->orderBy('id','DESC')->paginate(8);

        return view('admin.users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 8);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();

        $provinces = Province::orderBy('id', 'asc')->pluck('name', 'id');

        return view('admin.users.new', compact('roles', 'provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name'        => 'required',
            'email'       => 'required',
            'gender'      => 'required',
            'avatar'      => 'required',
            'password'    => 'required',
        ];

        $messages = [
            'name.required'         => 'El campo Nombre es requerido',
            'email.required'        => 'El campo Email es requerido',
            'gender.required'       => 'El campo Género es requerido',
            'avatar.required'       => 'La Imagen es requerida',
            'password.required'     => 'La Contraseña es requerida',
        ];

        $this->validate($request, $rules, $messages);

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);

        $user->assignRole($request->input('roles'));

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('uploads/avatars/' . $filename ) );

            $user->avatar = $filename;
            $user->save();
        }

        $user->notify(new UserNotification($user));

        return redirect()->route('usuarios.index')
                        ->with('success','Usuario de sistema creado correctamente!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);        

        return view('admin.users.show',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);

        $roles = Role::pluck('name','name')->all();

        $userRole = $users->roles->pluck('name','name')->all();

        $provinces = Province::orderBy('id', 'asc')->pluck('name', 'id');

        return view('admin.users.edit',compact('users', 'roles','userRole', 'provinces'));
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
        $rules = [
            'name'        => 'required',
            'email'       => 'required',
            'gender'      => 'required',
            'avatar'      => 'required',
            'password'    => 'required',
        ];

        $messages = [
            'name.required'         => 'El campo Nombre es requerido',
            'email.required'        => 'El campo Email es requerido',
            'gender.required'       => 'El campo Género es requerido',
            'avatar.required'       => 'La Imagen es requerida',
            'password.required'     => 'La Contraseña es requerida',
        ];

        $this->validate($request, $rules, $messages);

        $input = $request->all();

        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }

        $user = User::find($id);

        $user->name         = $request->input('name');
        $user->last_name    = $request->input('last_name');
        $user->gender       = $request->input('gender');
        $user->birthdate    = $request->input('birthdate');
        $user->job_title    = $request->input('job_title');
        $user->likes        = $request->input('likes');
        $user->description  = $request->input('description');
        $user->address      = $request->input('address');
        $user->province_id  = $request->input('province_id');
        $user->phone        = $request->input('phone');
        $user->email        = $request->input('email');
        $user->fb_link      = $request->input('fb_link');
        $user->tw_link      = $request->input('tw_link');
        $user->ins_link     = $request->input('ins_link');
        $user->in_link      = $request->input('in_link');
        $user->git_link     = $request->input('git_link');
        $user->active       = $request->has('active') ? 1 : 0;

        $user->update();

        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        if($request->file('avatar')){

            $destinationpath = 'uploads/avatars/';
        
            $image = $request->file('avatar');
        
            if(isset($user->avatar)){
                if(file_exists(public_path() . 'uploads/avatars/' . $user->avatar)){
                    File::delete($destinationpath.$user->avatar);
                    $img = $id.'.'.$image->getClientOriginalExtension();
                    Image::make($image)->resize(300, 330)->save( public_path('uploads/avatars/' . $user->avatar));
                    $user->avatar = $img;
                    $user->save();
                }
                else{
                    $img = $id.'.'.$image->getClientOriginalExtension();
                    Image::make($image)->resize(300, 330)->save( public_path('uploads/avatars/' . $img));
                    $user->avatar = $img;
                    $user->save();
                }
            }
            else{
                $img = $id.'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300, 330)->save( public_path('uploads/avatars/' . $user->avatar));
                $user->avatar = $img;
                $user->save();
            }
        }

        return redirect()->route('usuarios.index')
                        ->with('success','Usuario de sistema actualizado correctamente!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        unlink(public_path('uploads/avatars/') . $user->avatar);

        $user->delete();

        return redirect()->route('usuarios.index')
                        ->with('success','Usuario eliminado correctamente!!!');
    }
}
