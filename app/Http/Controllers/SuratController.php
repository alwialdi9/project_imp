<?php

namespace App\Http\Controllers;


use App\Surat;
use App\Petty;
use App\kategori_surat;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\SendRequest;

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
        $masuk = Surat::where('jenis', 'masuk')->count();
        $keluar = Surat::where('jenis', 'keluar')->count();
        $jumlah = Surat::all()->count();
        $petty = Petty::all();
        return view('surat.index', compact('surat', 'kategori_surat', 'masuk', 'keluar', 'jumlah', 'surat_id', 'petty'));
        // return view('surat.index', compact('surat','masuk','keluar','jumlah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $nampilgambar = True;
        $surat = Surat::all();
        $surat_id = Surat::orderBy('id', 'desc')->first();
        $id = $surat_id->id;
        $kategori_surat = kategori_surat::all();
        // dd($surat_id);
        return view('surat.suratmasuk', compact('nampilgambar', 'kategori_surat', 'surat', 'id'));
    }

    public function createkeluar()
    {
        //
        $nampilgambar = True;
        $surat = Surat::all();
        $surat_id = Surat::orderBy('id', 'desc')->first();
        $id = $surat_id->id;
        $kategori_surat = kategori_surat::all();
        // dd($surat_id);
        return view('surat.suratkeluar', compact('nampilgambar', 'kategori_surat', 'surat', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $file = $request->file('filesurat');

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
            'surat_path' => 'required|mimes:pdf,xlx,csv,doc,docx,jpg,png,jpeg|max:2048',
        ]);
        // dd($request->all());

        $date1 = substr($request->tanggal_surat, 0, 10);
        $date2 = substr($request->tanggal_surat, 13, 10);
        if ($request->jenis == "masuk") {
            Surat::create([
                'jenis' => $request->jenis,
                'kategori_id' => $request->jenis_surat,
                'nomor_surat' => $request->nomor_surat,
                'tanggal_terima' => $date1,
                'tanggal_surat' => $date2,
                'asal_surat' => $request->asal_surat,
                'tujuan_surat' => '',
                'perihal' => $request->perihal,
                'surat_path' => $nama_file,
            ]);
        } else {
            Surat::create([
                'jenis' => $request->jenis,
                'kategori_id' => $request->jenis_surat,
                'nomor_surat' => $request->nomor_surat,
                'tanggal_terima' => '',
                'tanggal_surat' => $date1,
                'asal_surat' => '',
                'tujuan_surat' => $request->tujuan_surat,
                'perihal' => $request->perihal,
                'surat_path' => $nama_file,
            ]);
            // return redirect('/surat');
        }

        $surat = Surat::all();
        $kategori_surat = kategori_surat::all();
        $masuk = Surat::where('jenis', 'Masuk')->count();
        $keluar = Surat::where('jenis', 'Keluar')->count();
        $jumlah = Surat::all()->count();
        $petty = Petty::all();
        return view('surat.index', compact('surat', 'kategori_surat', 'masuk', 'keluar', 'jumlah', 'petty'));
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
    public function destroy($id)
    {
        Surat::where('id', $id)->delete();
        return redirect('/surat');
    }
}
