<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.new-studio');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'name'=>'required',
            'logo'=>'image|max:2024'
        ]);
        if($image = $request->file('logo')){
            $destinationPath = 'studiosLogo/';
            $filename = date('YmdHis') .'.'. $image->getClientOriginalExtension();
            $image->move($destinationPath, $filename);
            $input['logo'] = $filename;
            
        }
        Studio::create($input);
            return redirect()->route('animes.index')->with('success','تم انشاء الاستوديو بنجاح!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Studio $studio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Studio $studio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Studio $studio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Studio $studio)
    {
        //
    }
}
