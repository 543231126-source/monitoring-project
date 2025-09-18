<?php

namespace App\Http\Controllers;

use App\Models\Mweplan;
use Illuminate\Http\Request;

class Cweplan extends Controller
{
    public function index()
    {
        // Ambil semua data tyson
        $data = Mweplan::all();

        // Kirim ke view
        return view('weplan', compact('data'));
    }
}

