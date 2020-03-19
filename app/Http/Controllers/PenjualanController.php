<?php

namespace App\Http\Controllers;

use App\Penjualan;
use App\Http\Requests\SendRequest;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $penjualan = Penjualan::all();
        return view('penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('penjualan.buat_penjualan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SendRequest $request)
    {
        $this->validate(request(), [
            'tanggal' => 'required',
            'nomor_faktur' => 'required',
            'referensi_akun' => 'required',
            'nama_pelanggan' => 'required|min:20',
            'status_penjualan' => 'required',
            'total' => 'required'
            ]);

        Penjualan::create([

            'tanggal' => $request->tanggal,
            'status_penjualan' => $request->status_penjualan,
            'nomor_faktur' => $request->nomor_faktur,
            'referensi_akun' => $request->referensi_akun,
            'total' => $request->total,
            'nama_pelanggan' => $request->nama_pelanggan,
            ]);
            return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan)
    {
        //
    }

//     public function rules()
//     {
//         return [
//             'tanggal' => ['required', new OnlyUppercase],
//             'nomor_faktur' => 'required',
//             'referensi_akun' => 'required',
//             'nama_pelanggan' => 'required|max:200',
//             'status_penjualan' => 'required',
//             'total' => 'required|numeric'
//         ];
          
//         // return view('/penjualan',['p' => $request]);
//     }
//     public function messages()
//     {
//         return [
//             'tanggal.required' => 'Tanggal tidak boleh kosong',
//             'nomor_faktur.required' => 'Nomor Fakur tidak boleh kosong',
//             'referensi_akun.required' => 'Referensi Akun tidak boleh kosong',
//             'nama_pelanggan.max' => 'Nama Pelanggan maximal 20 karakter',
//             'status_penjualan.required' => 'Status Penjualan tidak boleh kosong',
//             'total.numeric' => 'Total harus berupa angka',
//         ];
// }
}