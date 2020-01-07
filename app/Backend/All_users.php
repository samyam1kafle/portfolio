<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Auth;

class All_users extends Auth
{
    protected $fillable = [
        'id', 'name', 'skills_id', 'role_id', 'introduction', 'exp_id', 'work_id', 'image', 'email', 'password'
    ];

    public function roles()
    {
        return $this->belongsTo('App\Backend\role', 'role_id');
    }

    public function skills()
    {
        return $this->hasMany('App\Backend\skills', 'skills_id');
    }

    public function works()
    {
        return $this->hasMany('App\Backend\works', 'work_id');
    }

    public function exp()
    {
        return $this->hasMany('App\Backend\experience', 'exp_id');
    }
}
