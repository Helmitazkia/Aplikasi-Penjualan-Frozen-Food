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
            $table->string('email')->unique();;
            $table->string('alamat_customer');
            $table->string('phone');
         
            

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
