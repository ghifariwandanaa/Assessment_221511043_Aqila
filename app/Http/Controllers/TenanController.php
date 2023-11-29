<?php

namespace App\Http\Controllers;

use App\Models\Tenan;
use Illuminate\Http\Request;

class TenanController extends Controller
{
    public function index()
    {
        $tenan = Tenan::all();
        return view('tenan.index', compact('tenan'));
    }

}
