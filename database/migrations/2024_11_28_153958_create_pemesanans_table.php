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
            $table->string('customer_id')->constrained()->onDelete('cascade');
            $table->date('tanggal_pemesanan');
            $table->date('tanggal_acara');
            $table->enum('status_pemesanan', ['Pending', 'Ongoing', 'Success']);
            $table->bigInteger('total_biaya');
            $table->timestamps();

            // $table->foreign('id_customer')
            //     ->references('id_customer')
            //     ->on('customers')
            //     ->onDelete('set null');
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
