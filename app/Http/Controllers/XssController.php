<?php

namespace App\Http\Controllers;

use App\Models\xss;
use Illuminate\Http\Request;



class XssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     

    public function index()
    {
        return view('users.learnethicalhacking.reflectedXSS');
    }



}
