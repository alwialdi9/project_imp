<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Akun;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun = Akun::orderBy('kode_akun', 'asc')->get();
        $totalakun = Akun::all()->count();
        return view('akun.index', compact('akun', 'totalakun'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id == 1) {
            $kategori = "Kas & Bank";
        } elseif ($id == 2) {
            $kategori = "Akun Piutang";
        } elseif ($id == 3) {
            $kategori = "Aktiva Tetap";
        } elseif ($id == 4) {
            $kategori = "Aktiva Lancar";
        } elseif ($id == 5) {
            $kategori = "Akun Hutang";
        } elseif ($id == 6) {
            $kategori = "Kewajiban Jangka Panjang";
        } elseif ($id == 7) {
            $kategori = "Ekuitas";
        } elseif ($id == 8) {
            $kategori = "Pendapatan";
        } elseif ($id == 9) {
            $kategori = "Beban Usaha";
        } elseif ($id == 10) {
            $kategori = "Beban";
        }

        $akun = Akun::where('kategori_akun', $kategori)->get();
        $totalakun = Akun::where('kategori_akun', $kategori)->count();
        return view('akun.index', compact('akun', 'totalakun'));
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
