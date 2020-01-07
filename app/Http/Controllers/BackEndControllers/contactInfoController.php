<?php

namespace App\Http\Controllers\BackEndControllers;

use App\Backend\Contact;
use App\Http\Requests\ContactValidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Contact::all();
        return view('BackEnd/Contact-info/index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd/Contact-info/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactValidate $request)
    {
        $info = Contact::create($request->all());

        if ($info) {
            return redirect()->route('contact-info.index')->with('success', 'Details Added');
        } else {
            return redirect()->back()->with('info', 'Could not add the details please try again');

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
        $info = Contact::findOrFail($id);
        return view('BackEnd/Contact-info/edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactValidate $request, $id)
    {
        $detail = Contact::findOrFail($id);
        $update = $detail->update($request->all());
        if ($update) {
            return redirect()->route('contact-info.index')->with('success', 'Details Updated Successfully');
        } else {
            return redirect()->back()->with('info', 'Couldnot Update the Details');
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
        $detail = Contact::findOrFail($id);
        if ($detail) {
            $deleted = $detail->delete();
            if ($deleted) {
                return redirect()->route('contact-info.index')->with('success', 'Info Deleted Successfully');
            }
        }
    }
}
