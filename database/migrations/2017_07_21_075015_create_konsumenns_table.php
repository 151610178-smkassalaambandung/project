<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonsumennsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsumenns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_konsumen');
             $table->string('jenis_kelamin');
              $table->string('alamat');
               $table->date('tanggal_lahir');
                $table->integer('no_hp');
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
        Schema::dropIfExists('konsumenns');
    }
}
