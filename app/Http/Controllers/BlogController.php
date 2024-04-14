<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::latest()->paginate(12);
        $categories = BlogCategory::all();
        return view('blog.index',compact('blogs'),compact('request'))
        ->with('i', (request()->input('page',1) -1) * 12)
        ->with('categories',$categories);
    }

    public function create()
    {
        $categories = BlogCategory::all();
        return view('blog.create',compact('categories'));
    }

    public function edit(Blog $blog)
    {
        return view('blog.edit',compact('blog'));
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'title'=>'required',
            'image'=>'required | image | max:2024 |mimes:jpg,png,jpeg,svg,gif',
            'text'=>'required',
            'category_id'=>'required'
        ]);

        if($image = $request->file('image')){
            $destinationPath = 'blogImages/';
            $filename = date('YmdHis') .'.'. $image->getClientOriginalExtension();
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
            
        }

        Blog::create($input);
        return redirect()->route('blog.index')->with('success','!تم انشاء التدوينة بنجاح');
    }

    public function show(Blog $blog,Request $request)
    {
        $users = User::all();
        $categories = BlogCategory::all();
        // $blog_id = $request->route('blog');
        // dd($blog_id->id);
        return view('blog.show',compact('blog'),compact('categories'))->with('users',$users)->with('request',$request);
    }

    public function update(Request $request,Blog $blog)
    {
        $input = $request->all();

        if($image = $request->file('image')){
            $destinationPath = 'blogImages/';
            $filename = date('YmdHis') .'.'. $image->getClientOriginalExtension();
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
            
        }else{
            unset($input['image']);
        }

        $blog->update($input);
        return redirect()->route('blog.show',$blog)->with('success','!تم تحديث التدوينة بنجاح');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('success','!تم حذف التدوينة بنجاح');
    }
}
