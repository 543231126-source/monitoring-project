<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Msmartlock extends Model
{
    use HasFactory;

    protected $table = 'smartlock'; // nama tabel kamu
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'COL1',
        'COL2',
        'COL3',
        'COL4',
        'COL5',
        'COL6',
        'COL7',
        'COL8',
        'COL9',
        // tambahkan kolom lain sesuai tabel
    ];
}
