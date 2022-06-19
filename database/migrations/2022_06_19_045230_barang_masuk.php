<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BarangMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_barang_masuk', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->string('image');
            $table->string('nama_barang');
            $table->integer('nama_agen');
            $table->integer('harga_beli');
            $table->integer('catagories');
            $table->integer('jumlah_stok');
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
