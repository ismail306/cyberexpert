<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{

    public function index()
    {

        $blogs = blog::orderBy('created_at', 'desc')->paginate(3);
        $lastBlog = blog::orderBy('id', 'desc')->first();
        View()->share('blogs', $blogs);
        View()->share('lastBlog', $lastBlog);
        return view('users/blog');
    }

    public function create()
    {
        return view('users/createblog');
    }




    public function store(Request $request)
    {



        $blog = new blog();

        $originalname = $request->file('image')->getClientOriginalName();
        $filename =  date('Y-m-d') . '_' . time() . $originalname;
        $image = $request->file('image');
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(1365, 720);
        $image_resize->save(storage_path('/app/public/images/blog_images/' . $filename));

        $blog->image = $filename;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category = $request->category;
        $blog->user_id = $request->user_id;
        $blog->save();
        return redirect()->route('blog')
            ->withMessage('Blog Successfully Created');
    }

    public function show($id)
    {
        $blog = blog::find($id);
        return view('users/blogdetail', compact('blog'));
    }
}
