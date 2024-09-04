<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'title' => 'required|unique:blogs',
            'slug' => 'required|unique:blogs',
            'body' => 'required|min:10',
        ]);

        $blog = new Blog();
        $blog->title  = $request->title;
        $blog->slug   = Str::slug($request->title);
        $blog->body   = $request->body;
        //Add and upload image
        $blog->save();

        return back();
    }


    public function create()
    {
        return inertia('CreateBlog');
    }
}
