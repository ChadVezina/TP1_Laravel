<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

Route::get('/', [EtudiantController::class, 'index'])->name('home');

Route::resource('etudiants', EtudiantController::class);