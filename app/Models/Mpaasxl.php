<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mpaasxl extends Model
{
    use HasFactory;

    protected $table = 'paasxl'; // nama tabel

    protected $fillable = [
        'COL1','COL2','COL3','COL4','COL5',
        'COL6','COL7','COL8','COL9','COL10',
        'COL11','COL12','COL13','COL14','COL15',
        'COL16','COL17','COL18','COL19','COL20',
        'COL21','COL22','COL23','COL24','COL25',
        'COL26','COL27','COL28','COL29','COL30',
        'COL31',
    ];
}
