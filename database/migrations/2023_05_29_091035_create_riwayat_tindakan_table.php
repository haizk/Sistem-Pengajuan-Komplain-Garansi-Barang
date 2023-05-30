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
            $table->id();
            $table->string("laporan");
            $table->date("tanggal_tindakan");
            $table->string("tindakan");
            $table->unsignedInteger("id_petugas");
            $table->unsignedInteger("id_pengajuan");
            $table->foreign('id_petugas')->references('id')->on('user');
            $table->foreign('id_pengajuan')->references('id')->on('riwayat_pengajuan_garansi');
            $table->timestamps();
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
