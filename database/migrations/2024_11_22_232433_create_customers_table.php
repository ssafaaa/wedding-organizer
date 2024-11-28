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
        Schema::create('customers', function (Blueprint $table) {
            $table->string('id_customer')->primary();
            $table->string('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->text('address');
            $table->string('phone');
            $table->string('nik')->nullable();
            $table->enum('gender', ['Wanita', 'Pria'])->nullable();
            $table->timestamps();

            // Definisikan foreign key
            $table->foreign('user_id')
            ->references('id_user') // Kolom id di tabel users
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
