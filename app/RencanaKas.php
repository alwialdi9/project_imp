<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RencanaKas extends Model
{
    protected $table = 'rencanakas';
    protected $fillable = [
        'bulan_transaksi', 'jasa_projek', 'total_penerimaan', 'biaya_server', 'biaya_transportasi', 'biaya_laporan', 'gaji_direktur', 'gaji_staf', 'biaya_penyusutan', 'biaya_adm', 'bunga_bank', 'biaya_pajak', 'total_pengeluaran', 'total_biaya', 'laba_sblm_pajak', 'pajak',
    ];
}
