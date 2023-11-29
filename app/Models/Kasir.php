<?php

// app/Models/Kasir.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $table = 'kasir';
    protected $fillable = ['KodeKasir', 'Nama', 'HP'];
    protected $primaryKey = 'KodeKasir';
    public $incrementing = false;

}

