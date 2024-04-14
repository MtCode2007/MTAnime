<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
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
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'title'=>'required',
            'caption'=>'required',
            'image'=>'required|image',
        ]);

        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $filename = date('YmdHis') .'.'. $image->getClientOriginalExtension();
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }
        Slider::create($input);
        return redirect()->route('animes.index')->with('success','تم انشاء ال Slider بنجاح!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
