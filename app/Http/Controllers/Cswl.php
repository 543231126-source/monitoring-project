<?php

namespace App\Http\Controllers;

use App\Models\Mswl;
use Illuminate\Http\Request;

class Cswl extends Controller
{
    public function index()
    {
        // Ambil semua data tyson
        $data = Mswl::all();

        // Kirim ke view
        return view('swl', compact('data'));
    }
}

