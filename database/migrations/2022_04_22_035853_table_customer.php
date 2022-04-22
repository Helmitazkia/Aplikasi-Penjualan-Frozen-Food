<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_customer', function (Blueprint $table) {
            $table->increments('id_customer');
            $table->string('name_customer');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('email')->unique();
            $table->integer('email_verified_at')->nullable();
            $table->string('email_verification_code')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->integer('id_alamat_detail');
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
