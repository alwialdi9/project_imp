<?php

namespace App\Http\Controllers;

use App\Pbiaya;
use App\Http\Requests\SendRequest;
use Illuminate\Http\Request;

class BiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biaya = Pbiaya::all();
        return view('biaya.index', compact('biaya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biaya.buat_biaya');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $total = str_replace(',', '', $request->total);
        $this->validate(request(), [
            'tanggal' => 'required',
            'penerima' => 'required|max:20|unique:pembelian',
            'jenis_biaya' => 'required',
            'status' => 'required',
            'referensi_akun' => 'required',
            'tag' => 'required',
            'total' => 'required',
        ]);

        Pbiaya::create([

            'tanggal' => $request->tanggal,
            'penerima' => $request->penerima,
            'jenis_biaya' => $request->jenis_biaya,
            'status' => $request->status,
            'referensi_akun' => $request->referensi_akun,
            'tag' => $request->tag,
            'keterangan' => $request->keterangan,
            'total' => $total,
            ]);
            return redirect('/biaya');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Biaya  $biaya
     * @return \Illuminate\Http\Response
     */
    public function show(Biaya $biaya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biaya  $biaya
     * @return \Illuminate\Http\Response
     */
    public function edit(Biaya $biaya)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Biaya  $biaya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biaya $biaya)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Biaya  $biaya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biaya $biaya)
    {
        //
    }

    public function validation(Request $request)
    {
        $this->validate($request,[
            'tanggal' => 'required',
            'penerima' => 'required',
            'jenis_biaya' => 'required',
            'status' => 'required',
            'referensi_akun' => 'required',
            'tag' => 'required',
            'keterangan' => 'required',
            'total' => 'required|numeric'
            
        ]);
        return view('/biaya',['b' => $request]);
    }
}