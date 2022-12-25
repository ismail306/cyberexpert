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
}
