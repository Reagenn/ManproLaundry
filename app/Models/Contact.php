<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts'; // Nama tabel kontak
    protected $primaryKey = 'id'; // Kolom primary key
    protected $guarded = []; // Kolom yang diizinkan untuk mass assignment

    protected $fillable = [
        'name',
        'email',
        'message',
        // Tambahkan atribut lainnya di sini sesuai kebutuhan
    ];
}
