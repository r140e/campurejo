<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KelompokKeterangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelompok_keterangan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kelompok');
            $table->text('deskripsi');
            $table->text('tugas');
            $table->text('foto');
            $table->text('icon');
            $table->text('nama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok_keterangan');
    }
}
