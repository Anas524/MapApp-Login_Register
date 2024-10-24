<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapappController;

Route::get('/', [MapappController::class, 'viewForm']);
Route::post('/add-login', [MapappController::class, 'login']);
