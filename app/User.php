<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'gender', 'birthdate', 'job_title', 'likes', 'description', 'address', 'province_id', 'phone', 'email', 'fb_link', 'tw_link', 'ins_link', 'in_link', 'git_link', 'active', 'avatar', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relation with Province
    public function province()
    {
        return $this->belongsTo('App\Province', 'province_id');
    }

    public function scopeSearch($query, $name)
    {
        return $query
            ->where('name', 'like', '%' .$name. '%')
            ->orWhere('last_name', 'like', '%' .$name. '%')
            ->orWhere('job_title', 'like', '%' .$name. '%');
    }
}
