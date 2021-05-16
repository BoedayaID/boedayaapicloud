<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRumahAdatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumah_adat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_rumah_adat');
            $table->string('gambar')->nullable();
            $table->text('deskripsi')->nullable();
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
        Schema::dropIfExists('rumah_adat');
    }
}
