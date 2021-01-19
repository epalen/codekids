<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['title', 'slug', 'content', 'category_id', 'user_id'];

	// Relation with Post Category
    public function category()
    {
    	return $this->belongsTo('App\Post_Category', 'category_id');
    }

    // Relation with Post Category
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function scopeSearch($query, $name)
    {
        return $query
            ->where('title', 'like', '%' .$name. '%');
    }
}
