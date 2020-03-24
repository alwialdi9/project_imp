<?php

namespace App\Http\Controllers;

use App\Surat;
use App\kategori_surat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat = Surat::all();
        $surat_id = Surat::orderBy('id', 'desc')->first();
        $kategori_surat = kategori_surat::all();
        $masuk = Surat::where('jenis', 'Masuk')->count();
        $keluar = Surat::where('jenis', 'Keluar')->count();
        $jumlah = Surat::all()->count();
        return view('surat.index', compact('surat', 'kategori_surat', 'masuk', 'keluar', 'jumlah'), ['surat_id' => $surat_id]);
        $petty = Petty::all();
        return view('surat.index', compact('surat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('surat.suratmasuk');
        return view('surat.suratkeluar');
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
        $tanggal_surat = $request->tanggal_surat;
        function ubahTanggal($tanggal)
        {
            $pisah = explode('/', $tanggal);
            $array = array($pisah[1], $pisah[0], $pisah[2]);
            $satukan = implode('-', $array);
            return $satukan;
        }

        $waktu_surat = ubahTanggal($tanggal_surat);

        //inputfile
        $file = $request->file('file_surat');
        // nama file
        $nama_file = $file->getClientOriginalName();
        $file->move(public_path('file'), $nama_file);

        Validator::make($request->all(), [
            'jenis' => 'required',
            'kategori_id' => 'required|numeric',
            'nomor_surat' => 'required',
            'tanggal_terima' => 'required',
            'tanggal_surat' => 'required',
            'asal_surat' => 'required',
            'tujuan_surat' => 'required',
            'perihal' => 'required',
        ]);
        if ($request->jenissurat == "Masuk") {
            $tanggal_terima = $request->tanggal_diterima;

            $waktu = ubahTanggal($tanggal_terima);

            Surat::create([
                'jenis' => $request->jenissurat,
                'kategori_id' => $request->jenis_surat,
                'nomor_surat' => $request->nomor_surat,
                'tanggal_terima' => $waktu,
                'tanggal_surat' => $waktu_surat,
                'asal_surat' => $request->asal_surat,
                'tujuan_surat' => '',
                'perihal' => $request->perihal,
                'surat_path' => $nama_file,
            ]);
        } else {
            Surat::create([
                'jenis' => $request->jenissurat,
                'kategori_id' => $request->jenis_surat,
                'nomor_surat' => $request->nomor_surat,
                'tanggal_terima' => '',
                'tanggal_surat' => $waktu_surat,
                'asal_surat' => '',
                'tujuan_surat' => $request->tujuan_surat,
                'perihal' => $request->perihal,
                'surat_path' => $nama_file,
            ]);
        }

        return redirect('/surat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(Surat $surat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit(Surat $surat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surat $surat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surat $surat)
    {
        //
    }
}
