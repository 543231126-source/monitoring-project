<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mweplan extends Model
{
    use HasFactory;

    protected $table = 'weplan'; // nama tabel

    protected $fillable = [
        'COL1','COL2','COL3','COL4','COL5',
        'COL6','COL7','COL8','COL9','COL10',
        'COL11','COL12','COL13','COL14','COL15',
        'COL16','COL17','COL18','COL19','COL20',
        'COL21','COL22','COL23','COL24','COL25',
        'COL26','COL27','COL28','COL29','COL30',
        'COL31', 'COL32', 'COL33', 'COL34', 'COL35',
        'COL36', 'COL37', 'COL38', 'COL39', 'COL40',
        'COL41', 'COL42', 'COL43', 'COL44', 'COL45',
        'COL46', 'COL47', 'COL48', 'COL49', 'COL50',
        'COL51', 'COL52', 'COL53', 'COL54', 'COL55',
        'COL56', 'COL57', 'COL58', 'COL59', 'COL60',
    ];
}
