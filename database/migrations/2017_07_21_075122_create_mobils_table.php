<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_mobil');
            $table->unsignedInteger('konsumen_id');
            $table->foreign('konsumen_id')->references('id')->on('konsumenns')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_konsumen');
            $table->string('jenis_mobil');
            $table->string('merk');
            $table->string('warna');
            $table->integer('plat_nomer');
            $table->time('waktu');
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
        Schema::dropIfExists('mobils');
    }
}
