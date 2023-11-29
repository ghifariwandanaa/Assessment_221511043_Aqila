<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaTable extends Migration
{
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            $table->id('KodeNota');
            $table->foreignId('KodeTenan')->constrained('tenan', 'KodeTenan');
            $table->foreignId('KodeKasir')->constrained('kasir', 'KodeKasir');
            $table->date('TglNota');
            $table->time('JamNota');
            $table->decimal('JumlahBelanja', 10, 2);
            $table->decimal('Diskon', 5, 2)->default(0.00);
            $table->decimal('Total', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nota');
    }
}
