<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class BlogCommentsController extends Controller
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
        return view('blog.show');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Blog $blog,Request $request)
    {

        
        
        $request->validate([
            'blog_id'=>'required',
            'text'=>'required'
         ]);
         

         if ($request->user_id == null) {
            return redirect()->route('login');
         }else
         {
            BlogComments::create([
                'user_id' => Auth::user()->id,
                'blog_id' => 1,
                'text' => $request->text,
            ]);
         }
        return redirect()->route('blog.show',$request->blog_id)->with('success','تم حفظ التعليق');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogComments $blogComments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogComments $blogComments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogComments $blogComments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogComments $blogComments)
    {
        //
    }
}
