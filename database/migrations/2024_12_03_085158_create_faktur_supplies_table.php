<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakturSuppliesTable extends Migration
{
    public function up()
    {
        Schema::create('faktur_supplies', function (Blueprint $table) {
            $table->id();
            $table->string('no_faktur')->unique();
            $table->date('tanggal');
            $table->unsignedBigInteger('karyawan_id');
            $table->unsignedBigInteger('obat_id');
            $table->unsignedBigInteger('supplier_id');
            $table->decimal('total', 15, 2);
            $table->decimal('pajak', 15, 2);
            $table->decimal('total_bayar', 15, 2);
            $table->timestamps();

            // Menambahkan foreign key constraints
            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onDelete('cascade');
            $table->foreign('obat_id')->references('id')->on('obats')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('faktur_supplies');
    }
}
