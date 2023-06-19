<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\react;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class BlogController extends Controller
{

    public function index()
    {

        $blogs = blog::orderBy('created_at', 'desc')->paginate(12);
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

        //vlidate
        $request->validate([

            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $blog = new blog();

        $originalname = $request->file('image')->getClientOriginalName();
        $filename =  date('Y-m-d') . '_' . time() . $originalname;
        $image = $request->file('image');
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(1365, 720);
        $image_resize->save(public_path('storage/images/blog_images/' . $filename));
        $blog->image = $filename;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->user_id = $request->user_id;
        $blog->save();
        return redirect()->route('blog')
            ->withMessage('Blog Successfully Created');
    }
    // read full blog
    public function readfull($id)
    {
        $blog = blog::find($id);
        // find username from user table using user_id of blog table
        $user = User::find($blog->user_id);
        //find reacts for this blog
        $react = react::where('blog_id', $id)->get();
        //counting reacts
        $total_react = count($react);
        //if i reacted to this blog
        if (isset(auth()->user()->id)) {
            $i_reacted = react::where('blog_id', $id)->where('user_id', auth()->user()->id)->first();
        } else {
            $i_reacted = null;
        }

        $blogs = blog::orderBy('created_at', 'desc')->paginate(10);

        View()->share('blog', $blog);
        View()->share('i_reacted', $i_reacted);
        View()->share('user', $user);
        View()->share('total_react', $total_react);
        View()->share('blogs', $blogs);
        return view('users/fullblog');
    }

    public function update($id)
    {
        $blog = blog::find($id);
        // if blog user_id is not equal to auth user id then return back
        if (isset(auth()->user()->id)) {
            if ($blog->user_id != auth()->user()->id) {
                Session::flash('dump', "You are not authorized to access this page!");
                return redirect()->Route('404');
            }
        }


        View()->share('blog', $blog);
        return view('users/updateblog');
    }

    // updating blog

    public function updating(Request $request)
    {
        //vlidate
        $request->validate([

            'title' => 'required',
            'description' => 'required',

        ]);
        $blog = blog::find($request->id);
        $blog->title = $request->title;
        $blog->description = $request->description;

        $blog->save();
        return redirect()->route('blog.readfull', $request->id)
            ->withMessage('Blog Successfully Updated');
    }

    // delete blog
    public function delete($id)
    {

        $blog = blog::find($id);
        if (isset(auth()->user()->id)) {
            if ($blog->user_id != auth()->user()->id) {
                Session::flash('dump', "You are not authorized to access this page!");
                return redirect()->Route('404');
            } else {
                $blog->delete();
                return redirect()->route('blog')
                    ->withMessage('Blog Successfully Deleted');
            }
        }
    }

    public function adminblog()
    {
        //get  all blog with user paginate 25
        $blogs = blog::with('user')->paginate(25);
        View()->share('blogs', $blogs);
        return view('admin/blog');
    }

    public function admin_blog_delete(Request $request)
    {
        $blog = blog::find($request->id);
        $blog->delete();
        return redirect()->route('admin.blogs')
            ->withMessage('Blog Successfully Deleted');
    }
}
