<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $table = 'sponsors';

    protected $fillable = ['name', 'last_name', 'job_title', 'company', 'phone', 'email'];
}
