<?php

namespace App\Http\Controllers;

use App\RencanaKas;
use Illuminate\Http\Request;

class RencanaKasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rencana.index');
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
     * @param  \App\RencanaKas  $rencanaKas
     * @return \Illuminate\Http\Response
     */
    public function show(RencanaKas $rencanaKas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RencanaKas  $rencanaKas
     * @return \Illuminate\Http\Response
     */
    public function edit(RencanaKas $rencanaKas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RencanaKas  $rencanaKas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RencanaKas $rencanaKas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RencanaKas  $rencanaKas
     * @return \Illuminate\Http\Response
     */
    public function destroy(RencanaKas $rencanaKas)
    {
        //
    }
}
