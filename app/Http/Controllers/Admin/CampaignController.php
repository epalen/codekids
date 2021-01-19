<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Campaign;
use App\Course;
use App\Group;
use Image;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:ver-campana');
         $this->middleware('permission:crear-campana', ['only' => ['create','store']]);
         $this->middleware('permission:editar-campana', ['only' => ['edit','update']]); 
         $this->middleware('permission:eliminar-campana', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Campaign::search($request->get('criteria'))->orderBy('id','DESC')->paginate(8);

        return view('admin.campaigns.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 8);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $campaigns = Campaign::orderBy('id', 'asc')->pluck('title', 'id');

        $courses = Course::orderBy('id', 'asc')->pluck('name', 'id');

        $groups = Group::orderBy('id', 'asc')->pluck('name', 'id');

        return view('admin.campaigns.new', compact('campaigns', 'courses', 'groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required|'
        ]);

        //$input = $request->all();

        //dd($input);

        //$campaigns = Campaign::create($input);

        $campaigns = new Candidate();
        $campaigns->title            = $request->input('title');
        $campaigns->subtitle         = $request->input('subtitle');
        $campaigns->group_id         = $request->input('group_id');
        $campaigns->course_id        = $request->input('course_id');
        $campaigns->description      = $request->input('description');
        $campaigns->goal             = $request->input('goal');
        $campaigns->start_date       = $request->input('start_date');
        $campaigns->end_date         = $request->input('end_date');
        $campaigns->save();

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(1280, 852)->save( public_path('uploads/campaigns/' . $filename ) );

            //$user = Auth::user();
            $campaigns->avatar = $filename;
            $campaigns->save();
        }

        return redirect()->route('campanas.index')
                        ->with('success','Campaña creada correctamente!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campaigns = Campaign::find($id);

        $courses = Course::orderBy('id', 'asc')->pluck('name', 'id');

        $groups = Group::orderBy('id', 'asc')->pluck('name', 'id');

        return view('admin.campaigns.edit', compact('campaigns', 'courses', 'groups'));
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
            'title'     => 'required',
            'subtitle'  => 'required',
        ];

        $messages = [
            'title.required'            => 'El título es requerido',
            'subtitle.required'         => 'El subtítulo es requerido',
        ];

        $this->validate($request, $rules, $messages);

        //$input = $request->all();

        $campaign = Campaign::find($id);
        
        $campaign->title            = $request->input('title');
        $campaign->subtitle         = $request->input('subtitle');
        $campaign->group_id         = $request->input('group_id');
        $campaign->course_id        = $request->input('course_id');
        $campaign->description      = $request->input('description');
        $campaign->goal             = $request->input('goal');
        $campaign->start_date       = $request->input('start_date');
        $campaign->end_date         = $request->input('end_date');
        $campaign->update();

        if($request->hasFile('avatar')){
            // add the new photo
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(1280, 852)->save(public_path('uploads/campaigns/' . $filename));
            $oldFilename = $campaign->avatar;
            // update the database
            $campaign->avatar = $filename;
            // delete the old photo
            unlink(public_path('uploads/campaigns/') . $oldFilename);
        }
        
        $campaign->save();

        return redirect()->route('campanas.index')
                        ->with('success','Campaña actualizada correctamente!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campaigns = Campaign::find($id);  
        
        //dd($campaigns);

        return view('admin.campaigns.show',compact('campaigns'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campaign = Campaign::findOrFail($id);
        unlink(public_path('uploads/campaigns/') . $campaign->avatar);        
        $campaign->delete();

        return redirect()->route('campanas.index')
                        ->with('success','Campaña eliminada correctamente!!!');
    }
}
