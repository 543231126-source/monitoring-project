<?php

namespace App\Http\Controllers;

use App\Models\Mtyson;
use Illuminate\Http\Request;

class Ctyson extends Controller
{
    public function index()
    {
        // Ambil semua data tyson
        $data = Mtyson::all();

        // Kirim ke view
        return view('tyson', compact('data'));
    }
}

