<?php

namespace App\Http\Controllers;

use App\Petty;
use Illuminate\Http\Request;

class PettyCashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $petty = Petty::all();
        return view('petty.index', compact('petty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('petty.buat_petty');
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
        Petty::create([

            'tanggal' => $request->tanggal,
            'nilai_transaksi' => $request->nilai_transaksi,
            'jenis_transaksi' => $request->jenis_transaksi,
            'referensi_akun' => $request->referensi_akun,
            'keterangan' => $request->keterangan,
            ]);
            return redirect('/petty');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Petty  $petty
     * @return \Illuminate\Http\Response
     */
    public function show(Petty $petty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Petty  $petty
     * @return \Illuminate\Http\Response
     */
    public function edit(Petty $petty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Petty  $petty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petty $petty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Petty  $petty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petty $petty)
    {
        //
    }

    public function validation(Request $request)
    {
        $this->validate($request,[
            'tanggal' => 'required',
            'nilai_transaksi' => 'required|numeric',
            'jenis_transaksi' => 'required',
            'keterangan' => 'required|min:5|max:20'
            
        ]);
        return view('/petty',['p' => $request]);
    }
}
