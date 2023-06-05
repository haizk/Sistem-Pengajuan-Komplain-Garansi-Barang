<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_Tindakan extends Model
{
    use HasFactory;

    protected $table = 'Riwayat_Tindakan';

    protected $fillable = [
        'laporan',
        'tanggal_tindakan',
        'tindakan',
        'id_petugas',
        'id_pengajuan'
    ];
}
