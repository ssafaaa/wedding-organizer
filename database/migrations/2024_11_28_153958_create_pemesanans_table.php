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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->string('id_pemesanan')->primary();
            $table->string('id_customer');
            $table->date('tanggal_pemesanan');
            $table->date('tanggal_acara');
            $table->enum('status_pemesanan', ['Pending', 'Ongoing', 'Success']);
            $table->bigInteger('total_biaya');
            $table->timestamps();

            // Definisikan foreign key
            $table->foreign('customer_id')
            ->references('id_customer')
            ->on('customers')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
