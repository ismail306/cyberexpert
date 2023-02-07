<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {

        return view('users/profile');
    }




    //store about,pro_pic,certificate


}
