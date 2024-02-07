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
        Schema::create('tipe_pekerjaan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pekerjaan_id')->unsigned()->nullable();
            $table->string('jenis_pekerjaan')->nullable();
            $table->timestamps();
            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipe_pekerjaan');
    }
};
