<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komplain extends Model
{
    use HasFactory;

    protected $table = 'komplain';

    protected $fillable = [
        'tanggal_pembelian',
        'batas_garansi',
        'keluhan',
        'status',
        'id_barang',
        'id_pembeli',
        'foto',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function Barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'id_pembeli');
    }

    public function Histori()
    {
        return $this->hasMany(Histori::class);
    }
}
