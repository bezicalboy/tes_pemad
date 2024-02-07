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
        Schema::create('referensi_perusahaan', function (Blueprint $table) {
            $table->id('id');
            $table->integer('klien_id')->unsigned()->nullable();
            $table->string('email_perusahaan')->unique()->nullable();
            $table->string('akun_bank')->nullable();
            $table->timestamps();
            $table->foreign('klien_id')->references('id')->on('klien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referensi_perusahaan');
    }
};
