<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id(); // kolom id sebagai primary key
            $table->string('nama'); // kolom untuk nama supplier
            $table->string('alamat'); // kolom untuk alamat supplier
            $table->string('kota'); // kolom untuk kota supplier
            $table->string('telepon'); // kolom untuk telepon supplier
            $table->timestamps(); // kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
