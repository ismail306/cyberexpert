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
        $blogscount = blog::count();
        $usercount = User::count();
        View()->share('blogscount', $blogscount);
        View()->share('usercount', $usercount);

        return view('users.index');
    }
}
