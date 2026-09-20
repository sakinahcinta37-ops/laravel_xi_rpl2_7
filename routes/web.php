<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Suport\Facades\Routes;

Route::get('/go-green', [HalamanController::class, 'gogreen']);