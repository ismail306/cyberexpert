<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SqlUser;
use Illuminate\Support\Facades\Artisan;

class SqlController extends Controller
{
    public function index()
    {
        return view('users.learnethicalhacking.sql');
    }


    public function execute(Request $request)
    {
        $id = $request->input('id');
        $sql = "SELECT * FROM sqlusers WHERE id = $id";
        $sqlusers = DB::connection('mysql2')->select($sql);
        return view('users.learnethicalhacking.sql', ['sqlusers' => $sqlusers]);
    }


    public function store(Request $request)
    {
        $sqlusers = new Sqluser();
        $sqlusers->username = $request->input('username');
        $sqlusers->password = $request->input('password');
        $sqlusers->save();
        return redirect('/sql')->with('status', 'Data Added for SQL Injection');
    }

    public function seedDatabase()
    {
        Artisan::call('db:seed');
        return redirect()->back()->with('success', 'Database seeded successfully!');
    }
}
