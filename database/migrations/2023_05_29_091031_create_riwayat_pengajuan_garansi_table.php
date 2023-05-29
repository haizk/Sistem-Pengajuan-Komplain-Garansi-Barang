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
            $table->increments("id_riwayat_pengajuan_garansi");
            $table->timestamps();
            $table->string("pengajuan");
            $table->date("tanggal_pengajuan");
            $table->date("tanggal_selesai");
            $table->string("status");
            $table->unsignedInteger("id_admin");
            $table->unsignedInteger("id_pembeli");
            $table->unsignedInteger("id_barang");
            $table->foreign("id_admin")->references('id_user')->on('user');
            $table->foreign("id_pembeli")->references('id_user')->on('user');
            $table->foreign("id_barang")->references('id_barang')->on('barang');
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
