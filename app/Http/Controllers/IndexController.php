<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;
use App\Models\answer;
use App\Models\User;
use App\Models\blog;

class IndexController extends Controller
{
    public function index()
    {

        $blogs = blog::orderBy('created_at', 'desc')->get();
        $usercount = User::count();
        View()->share('blogs', $blogs);
        View()->share('usercount', $usercount);

        return view('users.index');
    }
}
