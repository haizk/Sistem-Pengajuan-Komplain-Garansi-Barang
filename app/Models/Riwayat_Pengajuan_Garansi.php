<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_Pengajuan_Garansi extends Model
{
    use HasFactory;

    protected $table = 'riwayat_pengajuan_garansi';

    protected $fillable = [
        'pengajuan',
        'tanggal_pengajuan',
        'tanggal_selesai',
        'status',
        'id_admin',
        'id_pembeli',
        'id_barang'
    ];

    protected $hidden = ['id', 'created_at', 'update_at'];
}