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
        return [
            'tanggal' => 'required',
            'nomor_faktur' => 'required',
            'referensi_akun' => 'required',
            'nama_pelanggan' => 'required|min:10',
            'status_penjualan' => 'required',
            'total' => 'required',
        ];

        return [
            'tanggal' => 'required',
            'nomor_faktur' => 'required',
            'referensi_akun' => 'required',
            'nama_pelanggan' => 'required|max:20',
            'status_penjualan' => 'required',
            'total' => 'required',
            'supplier' => 'required|max:20',
        ];

        return [
            'tanggal' => 'required',
            'penerima' => 'required|max:20|unique:pembelian',
            'jenis_biaya' => 'required',
            'status' => 'required',
            'referensi_akun' => 'required',
            'tag' => 'required',
            'total' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'nomor_faktur.required' => 'Nomor Fakur tidak boleh kosong',
            'referensi_akun.required' => 'Referensi Akun tidak boleh kosong',
            'nama_pelanggan.min' => 'Nama Pelanggan minimal 10 karakter',
            'status_penjualan.required' => 'Status Penjualan tidak boleh kosong',
            'total.required' => 'Total Penjualan tidak boleh kosong',
        ];

        return [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'nomor_faktur.required' => 'Nomor Fakur tidak boleh kosong',
            'referensi_akun.required' => 'Referensi Akun tidak boleh kosong',
            'nama_pelanggan.max' => 'Nama Pelanggan maximal 20 karakter',
            'status_penjualan.required' => 'Status Penjualan tidak boleh kosong',
            'total.required' => 'Total Penjualan tidak boleh kosong',
            'supplier.required' => 'Supplier tidak boleh kosong',
            'supplier.max' => 'Supplier maximal 20 karakter',
        ];

        return [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'penerima.required' => 'Nama Penerima tidak boleh kosong',
            'jenis_biaya.required' => 'Jenis Biaya tidak boleh kosong',
            'status.required' => 'Status tidak boleh kosong',
            'referensi_akun.required' => 'Referensi Akun tidak boleh kosong',
            'tag.required' => 'Tag tidak boleh kosong',
            'total.required' => 'Total tidak boleh kosong',
            'penerima.max' => 'Nama Penerima maximal 20 karakter',
        ];
    }
}
