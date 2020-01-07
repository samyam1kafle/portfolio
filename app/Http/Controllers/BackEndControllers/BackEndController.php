<?php

namespace App\Http\Controllers\BackEndControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackEndController extends Controller
{
    public function index(){
        return view('BackEnd/index');
    }
}
