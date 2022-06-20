<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qurban extends Model
{
    protected $table = 'qurban';
    protected $fillable = [
        'tgl',
        'nama',
        'alamat',
        'jenis',
        'bayar'
    ];
    use HasFactory;

    protected $hidden = [];
}
