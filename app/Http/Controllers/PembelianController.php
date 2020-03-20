<?php

namespace App\Http\Controllers;

use App\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pembelian = Pembelian::all();
        $pembelian_belum = Pembelian::where('status_pembelian', 'Belum')->sum('total');
        $tampilpembelianbelum = number_format($pembelian_belum, 0, ".", ".");
        return view('pembelian.index', compact('pembelian', 'tampilpembelianbelum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembelian.buat_pembelian');
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
        Pembelian::create([

            'tanggal' => $request->tanggal,
            'status_pembelian' => $request->status_pembelian,
            'nomor_faktur' => $request->nomor_faktur,
            'referensi_akun' => $request->referensi_akun,
            'total' => $total,
            'supplier' => $request->supplier,
        ]);
        return redirect('/pembelian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show(Pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembelian $pembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembelian $pembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembelian $pembelian)
    {
        //
    }

    public function validation(Request $request)
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'status_pembelian' => 'required',
            'nomor_faktur' => 'required',
            'referensi_akun' => 'required',
            'total' => 'required|numeric',
            'supplier' => 'required'

        ]);
        return view('/pembelian', ['b' => $request]);
    }
}
