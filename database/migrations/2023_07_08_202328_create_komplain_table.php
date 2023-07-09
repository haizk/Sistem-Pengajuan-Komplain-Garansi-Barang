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
        Schema::create('komplain', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pembelian');
            $table->date('batas_garansi');
            $table->string('keluhan');
            $table->string('status')->default('Pending');
            $table->string('foto')->nullable();
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang')->references('id')->on('barang');
            $table->unsignedBigInteger('id_pembeli');
            $table->foreign('id_pembeli')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komplain');
    }
};
