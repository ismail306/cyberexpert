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
        View()->share('blogscount', $blogscount);
        return view('users.index');
    }
}
