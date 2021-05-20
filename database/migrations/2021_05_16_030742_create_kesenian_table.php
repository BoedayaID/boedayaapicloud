<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKesenianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesenian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kesenian');
            $table->string('gambar')->nullable();
            $table->string('kategori_kesenian')->nullable();
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('suku_id')->nullable();
            $table->foreign('suku_id')->references('id')->on('suku');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kesenian');
    }
}
