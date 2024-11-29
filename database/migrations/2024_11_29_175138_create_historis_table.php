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
        Schema::create('historis', function (Blueprint $table) {
            $table->string('id_history')->primary();
            $table->string('id_customer');
            $table->string('id_pemesanan');
            $table->date('tanggal_pemesanan');
            $table->timestamps();

            // Definisikan foreign key
            $table->foreign('customer_id')
            ->references('id_customer') // Kolom id di tabel users
            ->on('customers')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            // Definisikan foreign key
            $table->foreign('pemesanan_id')
            ->references('id_pemesanan') // Kolom id di tabel users
            ->on('pemesanans')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historis');
    }
};
