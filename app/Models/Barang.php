<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'nama',
        'harga',
        'jumlah',
        'merk',
        'tanggal_pembelian',
        'batas_garansi',
        'foto',
        'id_pembeli'
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function Riwayat_Pengajuan_Garansi()
    {
        return $this->hasMany(Riwayat_Pengajuan_Garansi::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}