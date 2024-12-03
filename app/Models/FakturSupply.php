<?php

// app/Models/FakturSupply.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FakturSupply extends Model
{
    use HasFactory;

    protected $fillable = ['no_faktur', 'tanggal', 'karyawan_id', 'obat_id', 'supplier_id', 'total', 'pajak', 'total_bayar'];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'obat_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
}
