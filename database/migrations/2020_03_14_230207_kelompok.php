<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kelompok extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelompok', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no');
            $table->integer('nrp');
            $table->text('nama');
            $table->integer('kelompok');
            $table->text('hidro');
            $table->text('kemah_kerja');
            $table->text('satgas')->nullable();
            $table->integer('ketua')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok');
    }
}
