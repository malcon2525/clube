<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/evento_detalhe', [HomeController::class, 'eventoDetalhe']);
