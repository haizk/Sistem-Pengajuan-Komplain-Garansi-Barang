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
        Schema::create('riwayat_pengajuan_garansi', function (Blueprint $table) {
            $table->id();
            $table->string("pengajuan");
            $table->date("tanggal_pengajuan");
            $table->date("tanggal_selesai");
            $table->string("status")->default('Pending');
            $table->unsignedBigInteger("id_admin")->nullable();
            $table->unsignedBigInteger("id_pembeli");
            $table->unsignedBigInteger("id_barang");

            $table->foreign("id_admin")->references('id')->on('users');
            $table->foreign("id_pembeli")->references('id')->on('users');
            $table->foreign("id_barang")->references('id')->on('barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pengajuan_garansi');
    }
};