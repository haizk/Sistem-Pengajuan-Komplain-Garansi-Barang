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
        'id_merk'
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function Komplain()
    {
        return $this->hasMany(Komplain::class);
    }

    public function Merk()
    {
        return $this->belongsTo(Merk::class, 'id_merk');
    }
}