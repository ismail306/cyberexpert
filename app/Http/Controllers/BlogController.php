<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class BlogController extends Controller
{

    public function index()
    {
        return view('users/blog');
    }

    public function create()
    {
        return view('users/createblog');
    }

    public function store(Request $request)
    {
        $blog = new blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->image = $request->image;
        $blog->category = $request->category;
        $blog->user_id = $request->user_id;
        $blog->save();
        return redirect()->route('blog.index');
    }
}
