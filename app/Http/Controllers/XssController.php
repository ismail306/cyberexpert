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
        return view('users/learnethicalhacking/reflectedXSS');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\xss  $xss
     * @return \Illuminate\Http\Response
     */
    public function show(xss $xss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\xss  $xss
     * @return \Illuminate\Http\Response
     */
    public function edit(xss $xss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\xss  $xss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, xss $xss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\xss  $xss
     * @return \Illuminate\Http\Response
     */
    public function destroy(xss $xss)
    {
        //
    }
}
