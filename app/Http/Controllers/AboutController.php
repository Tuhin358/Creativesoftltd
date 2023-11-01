<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts=About::get();
        return view('adminpanel.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $abouts=About::find($id);
        return view('adminpanel.about.edit',compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $abouts_id=$request->abouts_id;
        $request->validate([
            'heading' => 'required',
            'content' => 'required',
        ]);
        About::findOrFail($abouts_id)->update([
            'heading'=>$request->heading,
            'content'=>$request->content,
        ]);
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
