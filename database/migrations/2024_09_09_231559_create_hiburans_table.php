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
        Schema::create('hiburans', function (Blueprint $table) {
            $table->string('id_hiburan')->primary();
            $table->string('nama_paket_hiburan');
            $table->text('deskripsi_hiburan');
            $table->bigInteger('harga_sewa_hiburan');
            $table->string('foto_hiburan')->default('foto_hiburan.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hiburans');
    }
};
