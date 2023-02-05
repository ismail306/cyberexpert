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

        $reflectedxss = new reflectedxss([
            'name' => $request->get('name'),
        ]);
        $reflectedxss->save();

        // get last inserted name
        $reflectedxss = reflectedxss::latest()->first();
        $name = $reflectedxss->name;

        return view('users.learnethicalhacking.reflectedXSS', compact('name'));
    }
}
