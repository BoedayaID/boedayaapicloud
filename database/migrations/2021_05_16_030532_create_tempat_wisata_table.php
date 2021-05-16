<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_wisata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_tempat');
            $table->string('gambar')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('map_url')->nullable();
            $table->string('alamat')->nullable();
            $table->unsignedBigInteger('suku_id')->nullable();
            $table->foreign('suku_id')->references('id')->on('suku');
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
        Schema::dropIfExists('tempat_wisata');
    }
}
