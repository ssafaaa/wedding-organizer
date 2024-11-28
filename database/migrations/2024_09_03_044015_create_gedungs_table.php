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
        Schema::create('gedungs', function (Blueprint $table) {
            $table->string('id_gedung')->primary();
            $table->string('nama_gedung');
            $table->enum('tipe_gedung', ['Indoor', 'Outdoor']);
            $table->text('alamat_gedung');
            $table->integer('kapasitas_gedung');
            $table->bigInteger('harga_sewa_gedung');
            $table->enum('status_gedung', ['Tersedia', 'Tidak tersedia']);
            $table->text('deskripsi_gedung');
            $table->string('foto_gedung')->default('foto_gedung.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gedungs');
    }
};
