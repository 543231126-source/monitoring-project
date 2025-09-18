<?php

namespace App\Http\Controllers;

use App\Models\Msmartlock;
use Illuminate\Http\Request;

class Csmartlock extends Controller
{
    public function index()
    {
        // Ambil semua data smartlock
        $data = Msmartlock::all();

        // Kirim ke view
        return view('smartlock', compact('data'));
    }
}

