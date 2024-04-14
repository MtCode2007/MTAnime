<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function create()
    {
        return view('blog.create_category');
    }
    public function store(Request $request)
    {
        $input = $request->validate([
            'name'=>'required',
        ]);
        BlogCategory::create($input);
        return redirect()->route('blog.index')->with('success','!تم انشاء الصنف بنجاح');
    }
}
