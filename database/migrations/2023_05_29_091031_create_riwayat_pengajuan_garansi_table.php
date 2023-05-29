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
            $table->increments("ID_RiwayatPengajuanGaransi");
            $table->timestamps();
            $table->string("pengajuan");
            $table->date("tanggal_pengajuan");
            $table->date("tanggal_selesai");
            $table->string("status");
            $table->unsignedBigInteger("id_admin");
            $table->unsignedBigInteger("id_pembeli");
            $table->unsignedBigInteger("id_barang");
            $table->foreign("id_admin")->references('increments')->on('user')->onDelete('cascade');
            $table->foreign("id_pembeli")->references('increments')->on('user')->onDelete('cascade');
            $table->foreign("id_barang")->references('increments')->on('barang')->onDelete('cascade');
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
