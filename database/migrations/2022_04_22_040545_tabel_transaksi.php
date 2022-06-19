<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_transaksi', function (Blueprint $table) {
            $table->increments('no_transaksi');
            $table->date('tanggal_transaksi');
            $table->integer('id_customer');
            $table->integer('id_product');
            $table->integer('jumlah_beli');
            $table->integer('staf');
            $table->string('type_transaksi');
            $table->integer('total_transaksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
