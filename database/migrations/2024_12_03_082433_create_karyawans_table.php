<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('karyawans', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('alamat');
        $table->string('kota');
        $table->string('status');
        $table->string('telepon');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('karyawans');
}

};
