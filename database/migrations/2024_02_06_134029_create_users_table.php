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
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('notelp');
            $table->timestamps();
        });
        
        Schema::create('klien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_klien');
            $table->string('email_klien')->unique();
            $table->string('notelp_klien');
            $table->timestamps();

        });

        Schema::create('referensi_bahasa', function (Blueprint $table) {
            $table->id('id');
            $table->integer('klien_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('bahasa');
            $table->timestamps();
            $table->foreign('klien_id')->references('id')->on('klien')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
