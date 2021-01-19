<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = ['name', 'description', 'course_id', 'group_id'];

    // Relation with Course Category model
    public function courseCategory()
    {
    	return $this->belongsTo('App\Course_Category', 'course_id');
    }

    // Relation with Group model
    public function group()
    {
    	return $this->belongsTo('App\Group', 'group_id');
    }
}
