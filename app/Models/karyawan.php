<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $table = "karyawans";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama_karyawan', 'nomor_karyawan', 'alamat'
    ];
}
