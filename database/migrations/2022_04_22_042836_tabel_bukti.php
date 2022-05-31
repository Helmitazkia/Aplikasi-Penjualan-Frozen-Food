<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelBukti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_bukti', function (Blueprint $table) {
            $table->increments('id_bukti');
            $table->date('tanggal_kirim_bukti');
            $table->string('image')->nullable();
            $table->integer('id_transaksi');
            $table->integer('id_customer');
            $table->integer('id_product');
            
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
