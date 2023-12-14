<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'orders'; // Nama tabel pelanggan
    protected $primaryKey = 'id'; // Kolom primary key
    protected $guarded = []; // Kolom yang diizinkan untuk mass assignment

    protected $fillable = [
        'id',
        'paket',
        'name',
        'address',
        'qty',
        'total_price',
        'status',
        // tambahkan atribut lainnya di sini
    ];
}
