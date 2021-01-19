<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = ['candidate_id', 'group_id', 'course_id'];

    /*
    * Relation with Candidate model
    */
    public function candidate()
    {
    	return $this->belongsTo('App\Candidate', 'candidate_id');
    }

    /*
    * Relation with Group model
    */
    public function group()
    {
    	return $this->belongsTo('App\Group', 'group_id');
    }

    /*
    * Relation with Course model
    */
    public function course()
    {
    	return $this->belongsTo('App\Course', 'course_id');
    }

    public function scopeSearch($query, $name)
    {
        return $query
            ->where('candidate_id', 'like', '%' .$name. '%')
            ->orWhere('status', 'like', '%' .$name. '%');
    }

    public function scopeStudents($query)
    {  
        $query->rightJoin('candidates', 'students.candidate_id', '=', 'candidates.id')
            ->join('groups', 'candidates.group_id', '=', 'groups.id')
            ->join('courses', 'candidates.course_id', '=', 'courses.id')
            ->select('students.candidate_id as cid', 'candidates.id', 'candidates.name', 'candidates.last_name', 'candidates.avatar', 'candidates.birthdate', 'candidates.description', 'candidates.goal', 'candidates.active', 'groups.id as g_id', 'groups.name as g_name', 'courses.name as c_name')
            ->groupBy('students.candidate_id', 'candidates.id', 'candidates.name', 'candidates.last_name', 'candidates.avatar', 'candidates.birthdate', 'candidates.description', 'candidates.goal', 'candidates.active', 'groups.id', 'groups.name', 'courses.name')
            ->get();
    }
}
