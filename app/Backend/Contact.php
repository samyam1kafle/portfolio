<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'id', 'location_1', 'location_2', 'mobile', 'landline', 'primary_email', 'secondary_email'
    ];
}
