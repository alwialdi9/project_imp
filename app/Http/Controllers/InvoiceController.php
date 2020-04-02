<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Pelanggan;

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
        $pelanggan = Pelanggan::all();
        $invoice = Invoice::all();
        $transaksi = Invoice::all()->count();
        $totaldb = Invoice::all()->sum('total_tagihan');
        $total = number_format($totaldb, 0, ".", ".");
        return view('invoice.index', compact('invoice', 'pelanggan', 'transaksi', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('invoice.buatinvoice', compact('pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $kuantitas = str_replace(',', '', $request->kuantitas);
        $harga_satuan = str_replace(',', '', $request->harga_satuan);
        $total_tagihan = str_replace('.', '', $request->total_tagihan);
        $harga_penjualan = $kuantitas * $harga_satuan;
        // dd($harga_penjualan, $kuantitas, $harga_satuan);
        Invoice::create([

            'nomor_faktur' => $request->nomor_faktur,
            'tanggal_invoice' => $request->tanggal_invoice,
            'pelanggan_id' => $request->pelanggan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'faximile' => $request->faximile,
            'jatuh_tempo' => $request->jatuh_tempo,
            'metode_pembayaran' => $request->metode_pembayaran,
            'keterangan' => $request->keterangan,
            'kuantitas' => $kuantitas,
            'harga_satuan' => $harga_satuan,
            'harga_penjualan' => $harga_penjualan,
            'pajak' => $request->pajak,
            'total_tagihan' => $total_tagihan,
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

    public function getinfo($id)
    {
        $info = Pelanggan::where('id', $id)->first();
        return response()->json($info);
    }
}
