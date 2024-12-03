<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    // Pastikan hanya field ini yang dapat diisi secara massal
    protected $fillable = ['nama', 'alamat', 'kota', 'telepon'];  // Jangan masukkan _token di sini

    // Jika primary key Anda bukan 'id', tentukan di sini
    protected $primaryKey = 'id';
}
