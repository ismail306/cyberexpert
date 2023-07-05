<?php

namespace App\Http\Controllers;

use App\Models\storedxss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StoredxssController extends Controller
{
    public function index()
    {
        $storedxss = storedxss::all();
        return view('users.learnethicalhacking.storedxss', compact('storedxss'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'message' => ['required', 'string'],
        ]);

        $storedxss = new storedxss();
        $storedxss->name = $request->name;
        $storedxss->message = $request->message;
        $storedxss->save();

        return redirect()->back()->with('success', 'Your feedback has been submitted successfully');
    }

    public function reset()
    {
        storedxss::truncate();
        return redirect()->back()->with('success', 'Database has been reset successfully');
    }
}
