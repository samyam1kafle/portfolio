<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    protected $fillable = [
        'id','name','worked_from','worked_to','description','worked_for','position'
    ];
}
