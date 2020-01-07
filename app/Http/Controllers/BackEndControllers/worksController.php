<?php

namespace App\Http\Controllers\BackEndControllers;

use App\Backend\works;
use App\Http\Requests\WorkValidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class worksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = works::all();
        return view('BackEnd/Works/index',compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd/Works/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkValidate $request)
    {
        $domain = works::create($request->all());
        if($domain){
            return redirect()->route('works.index')->with('success','Domain Added Successfully');
        }else{
            return redirect()->back()->with('Error','domain could not be added');
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
        $works = works::findOrFail($id);

        return view('BackEnd/Works/edit', compact('works'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkValidate $request, $id)
    {
        $works = works::findOrFail($id);

        $updated = $works->update($request->all());
        if ($updated) {

            return redirect()->route('works.index')->with('success', 'Domain Successfully Updated');
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
        $delete = works::findOrFail($id);

        $deleted = $delete->delete();

        if ($deleted) {
            return redirect()->route('works.index')->with('success', 'Domain Successfully Deleted');
        }
    }

}
