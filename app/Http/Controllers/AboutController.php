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
        $about = About::first();
        return view('service.about-us.index',compact('about'));
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
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $about = About::first();
        return view('service.about-us.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $about = About::first();
        $about->update([
            'title1'=>$request->title1,
            'title2'=>$request->title2,
            'image1'=>$request->image1,
            'image2'=>$request->image2,
            'image3'=>$request->image3,
            'text'=>$request->text
        ]);
        $input = $request->all();

        if($image = $request->file('image1')){
            $destinationPath = 'images/';
            $filename = date('YmdHis') .'.'. $image->getClientOriginalExtension();
            $image->move($destinationPath, $filename);
            $input['image1'] = $filename;
            
        }

        if($image = $request->file('image2')){
            $destinationPath = 'images/';
            $filename = date('YmdHis') .'.'. $image->getClientOriginalExtension();
            $image->move($destinationPath, $filename);
            $input['image2'] = $filename;
            
        }

        if($image = $request->file('image3')){
            $destinationPath = 'images/';
            $filename = date('YmdHis') .'.'. $image->getClientOriginalExtension();
            $image->move($destinationPath, $filename);
            $input['image3'] = $filename;
            
        }
        return redirect()->route('about-us')->with('success','تم تحديث المعلومات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
