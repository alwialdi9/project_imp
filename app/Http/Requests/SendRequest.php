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
            'nama_pelanggan' => 'required|min:20',
            'status_penjualan' => 'required',
            'total' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'nomor_faktur.required' => 'Nomor Fakur tidak boleh kosong',
            'referensi_akun.required' => 'Referensi Akun tidak boleh kosong',
            'nama_pelanggan.max' => 'Nama Pelanggan minimal 20 karakter',
            'status_penjualan.required' => 'Status Penjualan tidak boleh kosong',
            'total.numeric' => 'Total tidak boleh kosong'
        ];
    }
}
