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
            $table->string("Pengajuan");
            $table->date("TanggalPengajuan");
            $table->date("TanggalSelesai");
            $table->string("Status");
            $table->foreign("ID_Admin")
                ->references('increments')->on('user')->onDelete('cascade');
            $table->foreign("ID_Pembeli");
                ->references('increments')->on('ruser')->onDelete('cascade');
            $table->foreign("ID_Barang");
                >references('increments')->on('barang')->onDelete('cascade');
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
