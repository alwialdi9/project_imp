<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pelanggan_id');
            $table->date('jatuh_tempo');
            $table->string('metode_pembayaran');
            $table->string('keterangan');
            $table->integer('pajak');
            $table->integer('kuantitas');
            $table->integer('harga_satuan');
            $table->integer('harga_penjualan');
            $table->string('terbilang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
}
