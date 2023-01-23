<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{
    use HasFactory;
    protected $table = "reservasis";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama_reservasi', 'tanggal', 'jam'
    ];
}
