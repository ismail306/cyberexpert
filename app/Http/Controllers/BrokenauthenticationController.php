<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BrokenauthenticationController extends Controller
{
    public function index()
    {

        return view('users.learnethicalhacking.brokauthlogin');
    }
    public function login(Request $request)
    {

        $username = $request->username;
        $password = $request->password;
        //if username and password is correct or username is correct and password is bypassable such as 'or 1=1 -- -' then it will allow to login
        $user = DB::connection('mysql2')->select("SELECT * FROM brokenusers WHERE username = '$username' AND password = '$password'");




        if ($user) {
            return redirect()->route('brokauthwelcome');
        } else {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }

    public function welcome()
    {
        return view('users.learnethicalhacking.brokauthwelcome');
    }
}
