<?php

use App\Http\Controllers\gogreen;
use Illuminate\Suport\Facades\Routes;

Route::get('/go-green', [gogreen::class, 'gogreen']);
Route::get('/gogreen2', [gogreen::class, 'gogreen2']);
