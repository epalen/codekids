<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PaypalCandidateTransaction;
use App\Candidate;
use App\Course;
use App\Group;
use Image;
use DB;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*function __construct()
    {
         $this->middleware('permission:ver-candidato');
         $this->middleware('permission:crear-candidato', ['only' => ['create','store']]);
         $this->middleware('permission:editar-candidato', ['only' => ['edit','update']]); 
         $this->middleware('permission:eliminar-candidato', ['only' => ['destroy']]);
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$data = Candidate::search($request->get('criteria'))->orderBy('id','DESC')->paginate(8);

        $data = PaypalCandidateTransaction::transactions()->orderBy('id','DESC')->paginate(8);

        return view('admin.candidates.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 8);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $candidates = Candidate::orderBy('id', 'asc')->pluck('name', 'id');

        $courses = Course::orderBy('id', 'asc')->pluck('name', 'id');

        $groups = Group::orderBy('id', 'asc')->pluck('name', 'id');

        return view('admin.candidates.new', compact('candidates', 'courses', 'groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $candidates = new Candidate();
        $candidates->name           = $request->input('name');
        $candidates->last_name      = $request->input('last_name');
        $candidates->gender         = $request->input('gender');
        $candidates->birthdate      = $request->input('birthdate');
        $candidates->likes          = $request->input('likes');
        $candidates->talent         = $request->input('talent');
        $candidates->wishes         = $request->input('wishes');
        $candidates->description    = $request->input('description');
        $candidates->father_name    = $request->input('father_name');
        $candidates->f_doc_id       = $request->input('f_doc_id');
        $candidates->f_phone        = $request->input('f_phone');
        $candidates->f_email        = $request->input('f_email');
        $candidates->mother_name    = $request->input('mother_name');
        $candidates->m_doc_id       = $request->input('m_doc_id');
        $candidates->m_phone        = $request->input('m_phone');
        $candidates->m_email        = $request->input('m_email');
        $candidates->family_income  = $request->input('family_income');
        $candidates->address        = $request->input('address');
        $candidates->city           = $request->input('city');
        $candidates->phone          = $request->input('phone');
        $candidates->ailment        = $request->input('ailment');
        $candidates->medicines      = $request->input('medicines');
        $candidates->group_id       = $request->input('group_id');
        $candidates->course_id      = $request->input('course_id');
        $candidates->goal           = $request->input('goal');
        $candidates->active         = $request->has('active') ? 1 : 0;
        $candidates->save();

        // Handle the client upload image id avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('uploads/candidates/' . $filename ) );

            $candidates->avatar = $filename;
            $candidates->save();
        }

        return redirect()->route('candidatos.index')
                        ->with('success','Candidato creado correctamente!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidates = Candidate::find($id);

        $courses = Course::orderBy('id', 'asc')->pluck('name', 'id');

        $groups = Group::orderBy('id', 'asc')->pluck('name', 'id');

        return view('admin.candidates.edit', compact('candidates', 'courses', 'groups'));
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
        //$input = $request->all();

        $candidates = Candidate::find($id);

        //$candidates->update($input);

        $candidates->name           = $request->input('name');
        $candidates->last_name      = $request->input('last_name');
        $candidates->gender         = $request->input('gender');
        $candidates->birthdate      = $request->input('birthdate');
        $candidates->likes          = $request->input('likes');
        $candidates->talent         = $request->input('talent');
        $candidates->wishes         = $request->input('wishes');
        $candidates->description    = $request->input('description');
        $candidates->father_name    = $request->input('father_name');
        $candidates->f_doc_id       = $request->input('f_doc_id');
        $candidates->f_phone        = $request->input('f_phone');
        $candidates->f_email        = $request->input('f_email');
        $candidates->mother_name    = $request->input('mother_name');
        $candidates->m_doc_id       = $request->input('m_doc_id');
        $candidates->m_phone        = $request->input('m_phone');
        $candidates->m_email        = $request->input('m_email');
        $candidates->family_income  = $request->input('family_income');
        $candidates->address        = $request->input('address');
        $candidates->city           = $request->input('city');
        $candidates->phone          = $request->input('phone');
        $candidates->ailment        = $request->input('ailment');
        $candidates->medicines      = $request->input('medicines');
        $candidates->group_id       = $request->input('group_id');
        $candidates->course_id      = $request->input('course_id');
        $candidates->goal           = $request->input('goal');
        $candidates->active         = $request->has('active') ? 1 : 0;
        $candidates->update();

        if($request->hasFile('avatar')){
            // add the new photo
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('uploads/candidates/' . $filename));
            $oldFilename = $candidates->avatar;
            // update the database
            $candidates->avatar = $filename;
            // delete the old photo
            unlink(public_path('uploads/candidates/') . $oldFilename);
        }
        
        $candidates->save();

        return redirect()->route('candidatos.index')
                        ->with('success','Candidato actualizado correctamente!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $balances = \DB::table('paypal_candidate_transactions')
            ->select('candidate_id', \DB::raw('sum(transaction_total - transaction_fee) as total'))
            ->where('candidate_id', $id)
            ->groupBy('candidate_id')
            ->orderBy('total', 'desc')
            ->get();
        
        //$balances = PaypalCandidateTransaction::find($id);

        $candidates = Candidate::find($id);  
        
        //dd($balances);

        /*foreach($balances as $balance){
            dd($balance->total);
            return view('admin.candidates.show',compact('candidates', 'balance'));
        }*/

        return view('admin.candidates.show',compact('candidates', 'balances'));
    }    
}
