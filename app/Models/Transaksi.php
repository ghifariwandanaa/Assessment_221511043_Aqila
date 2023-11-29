<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['KodeNota', 'KodeTenan', 'KodeKasir', 'TglNota', 'JamNota', 'JumlahBelanja', 'Diskon', 'Total'];
    protected $primaryKey = 'KodeNota';
    public $incrementing = false;

}

