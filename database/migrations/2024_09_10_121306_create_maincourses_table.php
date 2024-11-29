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
        Schema::create('maincourses', function (Blueprint $table) {
            $table->string('id_maincourse')->primary();
            $table->string('nama_paket_mainC');
            $table->text('deskripsi_mainC');
            $table->bigINteger('harga_paket_mainC');
            $table->string('foto_mainC')->default('foto_maincourse.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maincourses');
    }
};
