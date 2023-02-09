<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;
use App\Models\answer;
use App\Models\User;
use App\Models\blog;
use App\Models\news;

class IndexController extends Controller
{
    public function index()
    {

        $blogs = blog::orderBy('created_at', 'desc')->get();
        $usercount = User::count();
        //last 4 news
        $news = news::orderBy('created_at', 'desc')->take(4)->get();

        View()->share('blogs', $blogs);
        View()->share('usercount', $usercount);
        View()->share('news', $news);

        return view('users.index');
    }
}
