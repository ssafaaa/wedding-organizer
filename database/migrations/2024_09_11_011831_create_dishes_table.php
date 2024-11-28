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
        Schema::create('dishes', function (Blueprint $table) {
            $table->string('id_dishes')->primary();
            $table->string('nama_paket_dishes');
            $table->text('deskripsi_dishes');
            $table->bigInteger('harga_paket_dishes');
            $table->string('foto_dishes')->default('foto_dishes.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};
