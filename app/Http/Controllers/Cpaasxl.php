<?php

namespace App\Http\Controllers;

use App\Models\Mpaasxl;
use Illuminate\Http\Request;

class Cpaasxl extends Controller
{
    public function index()
    {
        // Ambil semua data tyson
        $data = Mpaasxl::all();

        // Kirim ke view
        return view('paasxl', compact('data'));
    }
}

