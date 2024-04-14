<?php

namespace App\Http\Controllers;

use App\Models\Episoide;
use App\Models\Anime;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Routing\Route;

class EpisoidesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $episoides = Episoide::latest()->paginate(10);
        
        return view('anime.show',compact('episoides'))
                ->with('i',(request()->input('page' ,1) -1) * 10);

    }

    /**
    * Show the form for creating a new resource.
     */
    public function create()
    {
        $animes = Anime::all();
        return view('admin.add_episoide')->with('animes',$animes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Anime $anime)
    {

        $request->validate([
            'num'=>'required',
            'link'=>'required',
            'status'=>'required',
            'anime_id'=>'required',
        ]);

        Episoide::create([
            'num'=>$request->num,
            'link'=>$request->link,
            'anime_id'=>$request->anime_id,
            'status'=>$request->status,
        ]);
        return redirect()->route('animes.index')->with('success','تمت اضافة الحلقة بنجاح!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Episoide $episoide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Episoide $episoide)
    {
        return view('admin.edit_episoide',compact('episoide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Episoide $episoide)
    {
        $input = $request->all();
        $episoide->update($input);
        return redirect()->route('animes.index')->with('success','تمت تحديث الحلقة بنجاح!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Episoide $episoide)
    {
        $episoide->delete();
        return redirect()->route('animes.index')->with('success','تم حذف الحلقة');
    }
}
