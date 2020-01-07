<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $fillable = [
        'id','name'
    ];
    public function users(){
        return $this->hasMany('App\Backend\All_users');
    }
}
