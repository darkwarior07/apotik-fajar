<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FakturPenjualan extends Model
{
    use HasFactory;

    protected $table = 'faktur_penjualan';

    protected $fillable = [
        'no_faktur',
        'tanggal',
        'pelanggan_id',
        'karyawan_id',
        'obat_id',
        'jumlah',
        'total',
        'pajak',
        'total_bayar',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
}
