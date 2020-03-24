<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $invoice = Invoice::all();
        return view('invoice.index', compact('invoice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('invoice.buatinvoice');
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
        Invoice::create([

            'nomor_faktur' => $request->nomor_faktur,
            'tanggal_invoice' => $request->tanggal_invoice,
            'pelanggan_id' => '1',
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'faximile' => $request->faximile,
            'jatuh_tempo' => $request->jatuh_tempo,
            'metode_pembayaran' => $request->metode_pembayaran,
            'keterangan' => $request->keterangan,
            'kuantitas' => $request->kuantitas,
            'harga_satuan' => $request->harga_satuan,
            'harga_penjualan' => '',
            'pajak' => $request->pajak,
            'total_tagihan' => $request->total_tagihan,
            'terbilang' => $request->terbilang,
            'pelanggan' => $request->pelanggan,
            ]);
            return redirect('/invoice');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
