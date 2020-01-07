<?php

namespace App\Http\Controllers\BackEndControllers;

use App\Backend\experience;
use App\Http\Requests\ExpValidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class experienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = experience::all();

        return view('BackEnd/experience/index',compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd/experience/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpValidate $request)
    {
        $exp = experience::create($request->all());

        if($exp){
            return redirect()->route('experience.index')->with('success','Experience Added Successfully');
        }
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
        $exp = experience::findOrFail($id);

        return view('BackEnd/experience/edit',compact('exp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExpValidate $request, $id)
    {

        $detail = experience::findOrFail($id);
        $update = $detail->update($request->all());
        if ($update) {
            return redirect()->route('experience.index')->with('success', 'Experience Updated Successfully');
        } else {
            return redirect()->back()->with('info', 'Couldnot Update the Experience');
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
        $delete = experience::findOrFail($id);

        $deleted = $delete->delete();
        if($deleted){
            return redirect()->route('experience.index')->with('success','Experience Removed Successfully');
        }
    }
}
