<?php

namespace App\Http\Controllers;


use App\Surat;
use App\Petty;
use App\kategori_surat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Validator;
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
        $masuk = Surat::where('jenis', 'Masuk')->count();
        $keluar = Surat::where('jenis', 'Keluar')->count();
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
        return view('surat.suratmasuk', compact('nampilgambar'));
    }

    public function createkeluar()
    {
        //
        $nampilgambar = True;

        return view('surat.suratkeluar', compact('nampilgambar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SendRequest $request)
    {
        //inputfile
        // dd($request->all());
        $file = $request->file('filesurat');
        // dd($request->file('filesurat'));
        // nama file
        $nama_file = $file->getClientOriginalName();
        // $nama_file = time() . '.' . $request->file->extension();

        $file->move(public_path('file'), $nama_file);

        $this->validate(request(), [
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

        $date1 = substr($request->tanggal_surat, 0, 10);
        $date2 = substr($request->tanggal_surat, 13, 10);
        if ($request->jenis == "masuk") {
            Surat::create([
                'jenis' => $request->jenissurat,
                'kategori_id' => $request->jenis_surat,
                'nomor_surat' => $request->nomor_surat,
                'tanggal_terima' => $date1,
                'tanggal_surat' => $date2,
                'asal_surat' => $request->asal_surat,
                'tujuan_surat' => '',
                'perihal' => $request->perihal,
                'surat_path' => $nama_file,
            ]);
            
            // dd($masuk);
        } else {
            Surat::create([
                'jenis' => $request->jenissurat,
                'kategori_id' => $request->jenis_surat,
                'nomor_surat' => $request->nomor_surat,
                'tanggal_terima' => '',
                'tanggal_surat' => $date1,
                'asal_surat' => '',
                'tujuan_surat' => $request->tujuan_surat,
                'perihal' => $request->perihal,
                'surat_path' => $nama_file, 
            ]);
            return redirect('/surat');
        }

        $surat = Surat::all();
        $surat_id = Surat::orderBy('id', 'desc')->first();
        $kategori_surat = kategori_surat::all();
        $masuk = Surat::where('jenis', 'Masuk')->count();
        $keluar = Surat::where('jenis', 'Keluar')->count();
        $jumlah = Surat::all()->count();
        $petty = Petty::all();
        return view('surat.index', compact('surat', 'kategori_surat', 'masuk', 'keluar', 'jumlah', 'surat_id', 'petty'));
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
