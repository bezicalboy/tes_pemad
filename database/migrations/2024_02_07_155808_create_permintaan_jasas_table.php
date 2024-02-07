<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permintaan_jasa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penawaran_jasa_id')->unsigned()->nullable();
            $table->integer('klien_id')->unsigned()->nullable();
            $table->string('nama_permintaan_jasa');
            $table->integer('harga_permintaan_jasa');
            $table->timestamps();
            $table->foreign('penawaran_jasa_id')->references('id')->on('penawaran_jasa')->onDelete('cascade');
            $table->foreign('klien_id')->references('id')->on('klien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaan_jasa');
    }
};
