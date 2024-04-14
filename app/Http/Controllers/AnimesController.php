<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Episoide;
use App\Models\Slider;
use App\Models\Studio;
use App\Models\User;
use Illuminate\Http\Request;

class AnimesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sliders = Slider::all();
        $animes = Anime::latest()->paginate(15);
        return view('anime.index',compact('animes'),compact('sliders'))
                ->with('i',(request()->input('page' ,1) -1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $studios = Studio::all();
        return view('admin.create',compact('studios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $input = $request->validate([
        //     'image'=>'required | image | mimes:jpg,jpeg,png,svg | max:2048',
        //     'title'=>'required',
        //     'details'=>'required',
        //     'rating'=>'required',
        //     'status'=>'required',
        //     'tags'=>'required',
        //     'studio'=>'required',
        //     'trailer'=>'required',
        //     'episoide_count'=>'required',
        // ]);
        
        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $filename = date('YmdHis') .'.'. $image->getClientOriginalExtension();
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
            
        }
        
        // if(Episoide::create($input)){
        //     return redirect()->route('anime.index')->with('success','تمت اضافة الحلقة بنجاح!');
        // }else{
            Anime::create($input);
            return redirect()->route('animes.index')->with('success','تمت اضافة الانمي بنجاح!');
        // }//
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Anime $anime,Request $request)
    {
        $users = User::all();
    //    dd($users);
        $episoides = Episoide::latest()->paginate(10);
        return view('anime.show',compact('anime'),compact('episoides'))
                ->with('i',(request()->input('page' ,1) -1) * 10)
                ->with('a_id',$anime->id)
                ->with('request',$request)
                ->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anime $anime)
    {
        return view('admin.edit',compact('anime'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anime $anime)
    {
        $input = $request->validate([
            'details'=>'required',
        ]);

        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $filename = date('YmdHis') .'.'. $image->getClientOriginalExtension();
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
            
        }else{
            unset($input['image']);
        }
        $anime->update($input);

        return redirect()->route('animes.index')->with('success','تمت  تحديث الانمي بنجاح!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anime $anime)
    {
        $anime->delete();
        return redirect()->route('animes.index')->with('success','تم حذف الانمي بنجاح');
    }

    public function watch(Anime $anime,Request $request)
    {
        $users = User::all();
        // $episoides = Episoide::latest()->paginate(1);
        // dd($request->page);
        $episoides = $anime->episoides()->paginate(1);
        return view('anime.watch',compact('anime'),compact('episoides'))
                ->with('i',(request()->input('page' ,1) -1) * 1)
                ->with('a_id',$anime->id)
                ->with('request',$request)
                ->with('users',$users);
                
    }
}
