<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_Tindakan extends Model
{
    use HasFactory;

    protected $table = 'riwayat_tindakan';

    protected $fillable = [
        'laporan',
        'tanggal_tindakan',
        'tindakan',
        'id_petugas',
        'id_pengajuan'
    ];

    protected $hidden = [
        'id',
        'created_at',
        'update_at'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
 
    public function Riwayat_Pengajuan_Garansi()
    {
        return $this->belongsTo(Riwayat_Pengajuan_Garansi::class);
    }
}
