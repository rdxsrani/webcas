<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TpController;

Route::get('/', [TpController::class, 'index']);

Route::resource('tp', TpController::class);
