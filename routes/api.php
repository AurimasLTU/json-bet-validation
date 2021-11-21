<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\BetController;

Route::post('bet', [BetController::class, 'bet'])->name('bet');