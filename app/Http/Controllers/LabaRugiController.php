<?php

namespace App\Http\Controllers;

use App\LabaRugi;
use Illuminate\Http\Request;

class LabaRugiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('labarugi.index');
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
     * @param  \App\LabaRugi  $labaRugi
     * @return \Illuminate\Http\Response
     */
    public function show(LabaRugi $labaRugi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LabaRugi  $labaRugi
     * @return \Illuminate\Http\Response
     */
    public function edit(LabaRugi $labaRugi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LabaRugi  $labaRugi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LabaRugi $labaRugi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LabaRugi  $labaRugi
     * @return \Illuminate\Http\Response
     */
    public function destroy(LabaRugi $labaRugi)
    {
        //
    }
}
