<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $fillable = ['nama', 'jenis', 'harga', 'stok', 'id'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id');  // Pastikan relasi ini benar
    }
}
