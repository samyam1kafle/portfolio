<?php

namespace App\Http\Controllers\BackEndControllers;

use App\Backend\skills;
use App\Http\Requests\rolesValidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class skillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = skills::all();
        return view('BackEnd/skills/index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd/skills/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(rolesValidate $request)
    {
        $skills = skills::create($request->all());
        if ($skills) {
            return redirect()->route('skills.index')->with('success', 'Skills Added Successfully');
        } else {
            return redirect()->back()->with('Error', 'Skill could not be added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skills = skills::findOrFail($id);

        return view('BackEnd/skills/edit', compact('skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(rolesValidate $request, $id)
    {
        $skills = skills::findOrFail($id);

        $updated = $skills->update($request->all());
        if ($updated) {

            return redirect()->route('skills.index')->with('success', 'Skill Successfully Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = skills::findOrFail($id);

        $deleted = $delete->delete();

        if ($deleted) {
            return redirect()->route('skills.index')->with('success', 'Skill Successfully Deleted');
        }
    }
}
