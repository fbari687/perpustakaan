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
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string('kode_peminjaman')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('status_id');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->date('tanggal_kembali')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('book_id')->references('id')->on('books')->cascadeOnDelete();
            $table->foreign('status_id')->references('id')->on('rent_statuses')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rents');
    }
};
