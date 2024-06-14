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
        Schema::create('data_produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('kode_produk');
            $table->integer('kuantitas');
            $table->integer('harga_beli');
            $table->string('nama_pemilik');
            $table->integer('harga_jual');
            $table->string('gambar_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_produks');
    }
};
