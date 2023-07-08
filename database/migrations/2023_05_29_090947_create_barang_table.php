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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->string('merk');
            $table->date('tanggal_pembelian');
            $table->date('batas_garansi');
            $table->unsignedBigInteger('id_pembeli');
            $table->foreign('id_pembeli')->references('id')->on('users');
            $table->string('foto')->nullable(); //kolom untuk menyimpan file foto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
