<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()
    {
        $kasir = Kasir::all();
        return view('kasir.index', compact('kasir'));
    }

}
