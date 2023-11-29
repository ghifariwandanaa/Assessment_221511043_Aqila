<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangNotaTable extends Migration
{
    public function up()
    {
        Schema::create('barang_nota', function (Blueprint $table) {
            $table->id();
            $table->foreignId('KodeNota')->constrained('nota','KodeNota');
            $table->foreignId('KodeBarang')->constrained('barang','KodeBarang');
            $table->integer('JumlahBarang');
            $table->decimal('HargaSatuan', 10, 2);
            $table->decimal('Jumlah', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang_nota');
    }
}
