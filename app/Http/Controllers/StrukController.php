<?php

namespace App\Http\Controllers;

use App\Models\Struk;
use Illuminate\Http\Request;

class StrukController extends Controller
{
    public function index()
    {
        $struks = Struk::all();
        return view('struk.index', compact('struks'));
    }

}
