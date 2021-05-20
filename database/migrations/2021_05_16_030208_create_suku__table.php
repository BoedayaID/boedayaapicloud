<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_suku');
            $table->string('gambar')->nullable();
            $table->text('sejarah')->nullable();
            $table->string('bahasa')->nullable();
            $table->string('aksara_kuno')->nullable();
            $table->boolean('aksara_translate')->default('0')->nullable();
            $table->unsignedBigInteger('provinsi_id')->nullable();
            $table->foreign('provinsi_id')->references('id')->on('provinsi');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suku_');
    }
}
