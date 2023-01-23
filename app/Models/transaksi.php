<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksis";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'id_customer', 'id_service', 'total'
    ];

    public function customer()
    {
        return $this->belongsTo(customer::class, 'id_customer');
    }

    public function service()
    {
        return $this->belongsTo(service::class, 'id_service');
    }
}
