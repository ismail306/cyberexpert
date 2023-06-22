<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reflectedxss;



class ReflectedxssController extends Controller
{
    public function index()
    {
        return view('users.learnethicalhacking.reflectedXSS');
    }
    public function store(Request $request)
    {

        // Store new data
        $request->validate([
            'name' => 'required',
        ]);
        $name = $request->name;

        return view('users.learnethicalhacking.reflectedXSS', compact('name'));
    }
}
