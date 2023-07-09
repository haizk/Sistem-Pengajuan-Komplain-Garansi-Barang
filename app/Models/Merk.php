<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;

    protected $table = 'merks';

    protected $fillable = [
        'nama',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function Barang()
    {
        return $this->hasMany(Barang::class);
    }
}
