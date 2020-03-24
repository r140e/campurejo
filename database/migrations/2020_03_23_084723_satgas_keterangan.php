<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SatgasKeterangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satgas_keterangan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('satgas');
            $table->text('nama');
            $table->text('tugas');
            $table->text('icon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('satgas_keterangan');
    }
}
