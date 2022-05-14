<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabelpembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_pembayaran', function (Blueprint $table) {
            $table->increments('id_pembayaran');
            $table->string('image_pembayaran');
            $table->string('Nama_pembayaran')->nullable();
            $table->string('nama_penerima');
            $table->string('rekening');
            $table->integer('id_status');
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
