<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use App\Course;
use App\Student;
use App\Candidate;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $candidates = Candidate::orderBy('id', 'asc')->pluck('name', 'id');

        $courses = Course::orderBy('id', 'asc')->pluck('name', 'id');

        $groups = Group::orderBy('id', 'asc')->pluck('name', 'id');

        $data = Student::orderBy('id','DESC')->paginate(8);

        //$data = Student::students($request->get('criteria'))->orderBy('id','DESC')->paginate(8);

        return view('admin.students.index',compact('candidates', 'courses', 'groups', 'data'))
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

        return view('admin.students.tools.modal', compact('candidates', 'courses', 'groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students = new Student();
        $students->candidate_id = $request->input('candidate_id');
        $students->course_id    = $request->input('course_id');
        $students->group_id     = $request->input('group_id');
        $students->candidate_id = $request->input('candidate_id');
        $students->active       = $request->has('active') ? 1 : 0;
        $students->save();

        return redirect()->route('estudiante.index')
                        ->with('success','Estudiante creado correctamente!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $balance = \DB::table('paypal_candidate_transactions')
            ->select('candidate_id', \DB::raw('sum(transaction_total - transaction_fee) as total'))
            ->where('candidate_id', $id)
            ->groupBy('candidate_id')
            ->orderBy('total', 'desc')
            ->get();

        $students = Student::find($id);

        //dd($est);

        return view('admin.students.show',compact('students', 'balance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);

        $candidates = Candidate::orderBy('id', 'asc')->pluck('name', 'id');

        $courses = Course::orderBy('id', 'asc')->pluck('name', 'id');

        $groups = Group::orderBy('id', 'asc')->pluck('name', 'id');

        return view('admin.students.edit',compact('students', 'candidates', 'courses', 'groups'));
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
        $students = Student::find($id);

        $students->candidate_id = $request->input('candidate_id');
        $students->course_id    = $request->input('course_id');
        $students->group_id     = $request->input('group_id');
        $students->candidate_id = $request->input('candidate_id');
        $students->active       = $request->has('active') ? 1 : 0;
        $students->update();

        return redirect()->route('estudiante.index')
                        ->with('success','Estudiante actualizado correctamente!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
