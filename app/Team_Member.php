<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team_Member extends Model
{
     protected $table = 'team_members';

     protected $fillable = ['name', 'last_name', 'gender','birthdate', 'job_title', 'likes', 'description', 'address', 'city', 'phone', 'email', 'fb_link', 'tw_link', 'ins_link', 'in_link'];
}
