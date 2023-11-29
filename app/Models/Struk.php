<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Struk extends Model
{
    protected $fillable = ['KodeNota', 'KodeBarang', 'JumlahBarang', 'HargaSatuan', 'Jumlah'];
    public $timestamps = false;

}

