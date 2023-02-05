<?php

namespace App\Http\Controllers;

use App\Models\storedxss;
use Illuminate\Http\Request;

class StoredxssController extends Controller
{
    public function index()
    {
        return view('users.learnethicalhacking.storedXSS');
    }
}
