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
        Schema::create('sourvenirs', function (Blueprint $table) {
            $table->string('id_sourvenir')->primary();
            $table->string('nama_sourvenir');
            $table->bigInteger('harga_sourvenir');
            $table->text('deskripsi_sourvenir');
            $table->string('foto_sourvenir')->default('foto_sourvenir.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sourvenirs');
    }
};
