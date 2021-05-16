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
        Schema::dropIfExists('suku_');
    }
}
