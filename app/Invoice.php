<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = "invoice";

    protected $fillable = [
        'nomor_faktur',
        'tanggal_invoice',
        'pelanggan',
        'alamat',
        'telepon',
        'faximile',
        'tanggal_jatuh_tempo',
        'metode_pembayaran',
        'keterangan',
        'kuantitas',
        'harga_satuan',
        'pajak',
        'total_tagihan',
        'terbilang',
    ];
}
