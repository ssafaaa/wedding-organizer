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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->string('id_pembayaran')->primary();
            $table->string('pemesanan_id')->constrained()->onDelete('cascade');
            $table->enum('metode_pembayaran', ['Tunai', 'Nontunai']);
            $table->bigInteger('jumlah_pembayaran');
            $table->enum('status_transaksi', ['Lunas', 'Belum lunas']);
            $table->timestamps();

            //  // Definisikan foreign key
            //  $table->foreign('pemesanan_id')
            //  ->references('id_pemesanan') // Kolom id di tabel users
            //  ->on('pemesanans')
            //  ->onDelete('cascade')
            //  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
