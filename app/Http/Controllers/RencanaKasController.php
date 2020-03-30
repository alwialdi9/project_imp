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
        RencanaKas::all();
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
        $this->validate(request(),[
            'bulan_transaksi' => 'required',
            'jasa_projek' => 'required',
            'total_penerimaan' => 'required',
            'biaya_server' => 'required',
            'biaya_transportasi' => 'required',
            'biaya_laporan' => 'required',
            'gaji_direktur' => 'required',
            'gaji_staf' => 'required',
            'biaya_penyusutan' => 'required',
            'biaya_adm' => 'required',
            'bunga_bank' => 'required',
            'biaya_pajak' => 'required',
            'total_pengeluaran' => 'required',
            'total_biaya' => 'required',
            'laba_sblm_pajak' => 'required',
            'pajak' => 'required',
        ]);

        RencanaKas::create([
            'bulan_transaksi' => $request->bulan_transaksi,
            'jasa_projek' => $request->jasa_projek,
            'total_penerimaan' => $request->total_penerimaan,
            'biaya_server' => $request->biaya_server,
            'biaya_transportasi' => $request->biaya_transportasi,
            'biaya_laporan' => $request->biaya_laporan,
            'gaji_direktur' => $request->gaji_direktur,
            'gaji_staf' => $request->gaji_staf,
            'biaya_penyusutan' => $request->biaya_penyusutan,
            'biaya_adm' => $request->biaya_adm,
            'bunga_bank' => $request->bunga_bank,
            'biaya_pajak' => $request->biaya_pajak,
            'total_pengeluaran' => $request->total_pengeluaran,
            'total_biaya' => $request->total_biaya,
            'laba_sblm_pajak' => $request->laba_sblm_pajak,
            'pajak' => $request->pajak,
        ]);
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
