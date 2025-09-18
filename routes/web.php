<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ctyson;
use App\Http\Controllers\Cpaasxl;
use App\Http\Controllers\Csmartlock;
use App\Http\Controllers\Cswl;
use App\Http\Controllers\Cweplan;

Route::get('/swl', [Cswl::class, 'index'])->name('swl.index');
Route::get('/paasxl', [Cpaasxl::class, 'index'])->name('paasxl.index');
Route::get('/smartlock', [Csmartlock::class, 'index'])->name('smartlock.index');
Route::get('/tyson', [Ctyson::class, 'index'])->name('tyson.index');
Route::get('/weplan', [Cweplan::class, 'index'])->name('weplan.index');