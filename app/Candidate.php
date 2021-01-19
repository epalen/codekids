<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Candidate extends Model
{
    protected $table = 'candidates';

    protected $fillable = [
        'name', 
        'last_name', 
        'gender', 
        'birthdate', 
        'likes', 
        'talent', 
        'wishes', 
        'description', 
        'father_name', 
        'f_doc_id',
        'f_phone',
        'f_email',
        'mother_name', 
        'm_doc_id',
        'm_phone',
        'm_email',
        'family_income', 
        'address', 
        'city', 
        'phone',
        'ailment',
        'medicines',
        'group_id', 
        'course_id', 
        'goal',
        'active'
    ];

    /*
    * Relation with Group model
    */
    public function group()
    {
    	return $this->belongsTo('App\Group', 'group_id');
    }

    /**
     * Relation with Course model
     */
    public function course()
    {
    	return $this->belongsTo('App\Course', 'course_id');
    }

    /**
     * The PaypalTransaction that belong to the Candidate.
     */
    public function transaction()
    {
        return $this->belongsTo('App\PaypalCandidateTransaction', 'candidate_id');
    }    

    public function scopeSearch($query, $name)
    {
        return $query
            ->where('name', 'like', '%' .$name. '%')
            ->orWhere('last_name', 'like', '%' .$name. '%')
            ->orWhere('father_name', 'like', '%' .$name. '%')
            ->orWhere('mother_name', 'like', '%' .$name. '%');
    }

    public function scopeCandidates($query)
    {
        $query->rightJoin('groups', 'candidates.group_id', '=', 'groups.id')
            ->select('group_id as gid', 'groups.id', 'groups.name')
            ->groupBy('group_id', 'groups.id', 'groups.name')
            ->get();
    }
}
