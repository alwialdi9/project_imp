<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Penjualan
        return [
            'tanggal' => 'required',
            'nomor_faktur' => 'required',
            'referensi_akun' => 'required',
            'nama_pelanggan' => 'required|max:15',
            'status_penjualan' => 'required',
            'total' => 'required',
        ];

        // Pembelian
        return [
            'tanggal' => 'required',
            'status_pembelian' => 'required',
            'nomor_faktur' => 'required',
            'referensi_akun' => 'required',
            'total' => 'required',
            'supplier' => 'required|max:20',
        ];

        // Biaya
        return [
            'tanggal' => 'required',
            'penerima' => 'required|max:20|unique:biaya',
            'jenis_biaya' => 'required',
            'status' => 'required',
            'referensi_akun' => 'required',
            'keterangan' => 'required',
            'tag' => 'required',
            'total' => 'required',
        ];

        // PattyCash
        return [
            'tanggal' => 'required',
            'nilai_transaksi' => 'required',
            'jenis_transaksi' => 'required',
            'referensi_akun' => 'required',
            'keterangan' => 'required',
        ];

        // Invoice
        return [
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
        ];
    }

    public function messages()
    {
        // Penjualan
        return [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'nomor_faktur.required' => 'Nomor Fakur tidak boleh kosong',
            'referensi_akun.required' => 'Referensi Akun tidak boleh kosong',
            'nama_pelanggan.max' => 'Nama Pelanggan maximal 15 karakter',
            'status_penjualan.required' => 'Status Penjualan tidak boleh kosong',
            'total.required' => 'Total Penjualan tidak boleh kosong',
        ];

        // Pembelian
        return [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'status_pembelian.required' => 'Status Pembelian tidak boleh kosong',
            'nomor_faktur.required' => 'Nomor Fakur tidak boleh kosong',
            'referensi_akun.required' => 'Referensi Akun tidak boleh kosong',
            'total.required' => 'Total Pembelian tidak boleh kosong',
            'supplier.required' => 'Supplier tidak boleh kosong',
            'supplier.max' => 'Supplier maximal 20 karakter',
        ];

        // Biaya
        return [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'penerima.required' => 'Nama Penerima tidak boleh kosong',
            'jenis_biaya.required' => 'Jenis Biaya tidak boleh kosong',
            'status.required' => 'Status tidak boleh kosong',
            'referensi_akun.required' => 'Referensi Akun tidak boleh kosong',
            'keterangan.required' => 'Keterangan tidak boleh kosong',
            'tag.required' => 'Tag tidak boleh kosong',
            'total.required' => 'Total tidak boleh kosong',
            'penerima.max' => 'Nama Penerima maximal 20 karakter',
        ];

        // PattyCash
        return [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'nilai_transaksi.required' => 'Nilai Transaksi tidak boleh kosong',
            'jenis_transaksi.required' => 'Jenis Transaksi tidak boleh kosong',
            'referensi_akun.required' => 'Referensi Akun tidak boleh kosong',
            'keterangan.required' => 'Keterangan tidak boleh kosong',
        ];

        // Invoice
        return [
            'nomor_faktur.required' => 'Nomor Faktur tidak boleh kosong',
            'tanggal_invoice.required' => 'Tanggal invoice tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'telepon.required' => 'Telepon tidak boleh kosong',
            'faximile.required' => 'Fax tidak boleh kosong',
            'jatuh_tempo.required' => 'Tanggal jatuh tempo tidak boleh kosong',
            'metode_pembayaran.required' => 'Metode Pembayaran tidak boleh kosong',
            'keterangan.required' => 'Keterangan tidak boleh kosong',
            'harga_satuan.required' => 'Harga Satuan tidak boleh kosong',
            'pajak.required' => 'Pajak tidak boleh kosong',
            'total_tagihan.required' => 'Total Tagihan tidak boleh kosong',
            'terbilang.required' => 'Tidak boleh kosong',
            'pelanggan.required' => 'Pelanggan tidak boleh kosong', 
            'status_invoice.required' => 'Status Invoice tidak boleh kosong', 
        ];
    }
}
