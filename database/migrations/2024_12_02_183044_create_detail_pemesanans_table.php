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
        Schema::create('detail_pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('id_pemesanan');
            $table->string('item_id');
            $table->integer('quantity')->nullable();
            $table->bigInteger('price');
            $table->bigInteger('subtotal');
            $table->timestamps();
            
            $table->foreign('id_pemesanan')
                ->references('id_pemesanan')
                ->on('pemesanans')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pemesanans');
    }
};
