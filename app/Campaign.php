<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaigns';

    protected $fillable = ['title', 'subtitle', 'group_id', 'course_id', 'description', 'goal', 'start_date', 'end_date'];

    // Relation with Group model
    public function group()
    {
    	return $this->belongsTo('App\Group', 'group_id');
    }

    // Relation with Course model
    public function course()
    {
    	return $this->belongsTo('App\Course');
    }

    public function scopeSearch($query, $name)
    {
        return $query
            ->where('title', 'like', '%' .$name. '%')
            ->orWhere('subtitle', 'like', '%' .$name. '%');
    }
}
