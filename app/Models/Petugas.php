<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas';

    protected $fillable = [
        'nama',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function Histori()
    {
        return $this->hasMany(Histori::class);
    }
}
