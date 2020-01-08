<?php

namespace App\Http\Controllers\BackEndControllers;

use App\Backend\Contact;
use App\Backend\experience;
use App\Backend\role;
use App\Backend\skills;
use App\Backend\works;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackEndController extends Controller
{
    public function index()
    {
        $work = works::count();
        $contact = Contact::count();
        $exp = experience::count();
        $role = role::count();
        $skills = skills::count();
        return view('BackEnd/index',compact('work','contact','exp','role','skills'));
    }
}
