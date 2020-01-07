<?php

namespace App\Http\Controllers\BackEndControllers;

use App\Backend\All_users;
use App\Backend\Contact;
use App\Backend\experience;
use App\Backend\skills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $contacts = Contact::all();
        $exp = experience::all();
        $skills = skills::all();
           return view('BackEnd/Profile/index',compact('user','contacts','exp','skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = All_users::findOrFail($id);
            if($request->hasFile('image')){
                if($update->image != null){
                    unlink(public_path().'/uploads/'.$update->image);
                }
                $featured = $request->file('image');
                $name = time() . $featured->getClientOriginalExtension();

                $resize =Image::make($featured);
                $resize->resize('1920','1080')->save('uploads/'.$name);

                $update->image = $name;
            }
            $update->name = $request->name;
            $update->email = $request->email;
            $update->introduction = $request->introduction;
            $update->password = Hash::make($request->password);

            $updated = $update->update();
        if($updated){
            return redirect()->route('profile.index')->with('success','Profile Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
