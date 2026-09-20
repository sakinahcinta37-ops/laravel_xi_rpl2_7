<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Suport\Facades\Routes;

Route::get('/halaman-utama', [HalamanController::class, 'HalamanUtama']);