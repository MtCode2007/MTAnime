<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return view('animes.show',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animes.show');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $anime = $request->route('anime');
        $user = Auth::id();
        // dd($anime);
         $request->validate([
            'anime_id'=>'required',
            'text'=>'required'
         ]);

        Comment::create([
            'user_id' => Auth::user()->id,
            'anime_id' => $request->anime_id,
            'text' => $request->text,
        ]);
        return redirect()->route('animes.show',$request->anime_id)->with('success','تم حفظ التعليق');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('animes.show',compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $comment->update([
            'text'=>$request->text
        ]);
        return redirect()->route('animes.show',$request->anime_id)->with('success','!تم تعديل التعليق بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('animes.show')->with('success','تم حذف التعليق');
    }
}
