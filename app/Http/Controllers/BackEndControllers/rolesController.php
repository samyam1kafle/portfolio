<?php

namespace App\Http\Controllers\BackEndControllers;

use App\Backend\role;
use App\Http\Requests\rolesValidate;
use Illuminate\Database\Console\Migrations\RollbackCommand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class rolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = role::all();
        return view('BackEnd/roles/index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd/roles/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(rolesValidate $request)
    {

        $roles = role::create($request->all());

        if ($roles) {
            return redirect()->route('roles.index')->with('success', 'Role added successfully');
        } else {
            return redirect()->back()->with('info', 'There was an error adding the role please try again later');
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
        $role = role::findOrFail($id);
        return view('BackEnd/roles/edit', compact('role'));
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
        $role = role::findOrFail($id);

        $update = $role->update($request->all());

        if ($update) {
            return redirect()->route('roles.index')->with('success', 'Role Updated Successfully');
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
        $delete = role::findOrFail($id);

        $deleted = $delete->delete();

        if ($deleted) {
            return redirect()->route('roles.index')->with('success', 'Role Deleted Successfully');
        }
    }
}
