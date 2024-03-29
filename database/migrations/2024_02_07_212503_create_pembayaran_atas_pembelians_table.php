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
        Schema::create('pembayaran_atas_pembelian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('klien_id')->unsigned()->nullable();
            $table->string('sudah_dibayar');
            $table->timestamps();
            $table->foreign('klien_id')->references('id')->on('klien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran_atas_pembelian');
    }
};
