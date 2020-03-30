<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $this->validate(request(), [
            'nomor_faktur' => 'required',
            'tanggal_invoice' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'faximile' => 'required',
            'jatuh_tempo' => 'required',
            'metode_pembayaran' => 'required',
            'keterangan' => 'required',
            'harga_satuan' => 'required',
            'pajak' => 'required',
            'total_tagihan' => 'required',
            'terbilang' => 'required',
            'pelanggan' => 'required',
            'status_invoice' => 'required',
        ]);

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
            'harga_penjualan' => '120000',
            'pajak' => $request->pajak,
            'total_tagihan' => $request->total_tagihan,
            'terbilang' => $request->terbilang,
            'pelanggan' => $request->pelanggan,
            'status_invoice' => $request->status_invoice,
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
        $invoice = DB::table('invoice')->where('id', $id)->get();
        return view('invoice.edit', ['invoice' => $invoice]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $total = str_replace(',', '', $request->total);
        DB::table('invoice')->where('id', $request->id)->update([
            'tanggal_invoice' => $request->tanggal_invoice,
            'nomor_faktur' => $request->nomor_faktur,
            'pelanggan' => $request->pelanggan,
            'status_invoice' => $request->status_invoice,
            'keterangan' => $request->keterangan,
            'total_tagihan' => $request->total_tagihan,
        ]);
        return redirect('/invoice');
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

    public function hapus($id)
    {
        DB::table('invoice')->where('id', $id)->delete();
        return redirect('/invoice');
    }
}
