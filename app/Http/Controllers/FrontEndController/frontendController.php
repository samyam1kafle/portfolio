<?php

namespace App\Http\Controllers\FrontEndController;

use App\Backend\All_users;
use App\Backend\Contact;
use App\Backend\experience;
use App\Backend\skills;
use App\Backend\works;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class frontendController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        $skills = skills::all();
        $works = works::all();
        $exp = experience::all();
        $admin = All_users::findOrFail(1);
        return view('Frontend/index',compact('contacts','skills','works','exp','admin'));
    }
}
