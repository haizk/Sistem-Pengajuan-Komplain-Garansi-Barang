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
        Schema::create('riwayat_tindakan', function (Blueprint $table) {
            $table->increments("id_riwayat_tindakan");
            $table->timestamps();
            $table->string("laporan");
            $table->date("tanggal_tindakan");
            $table->string("tindakan");
            $table->unsignedInteger("id_petugas");
            $table->unsignedInteger("id_pengajuan");
            $table->foreign('id_petugas')->references('id_user')->on('user');
            $table->foreign('id_pengajuan')->references('id_riwayat_pengajuan_garansi')->on('riwayat_pengajuan_garansi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_tindakan');
    }
};
