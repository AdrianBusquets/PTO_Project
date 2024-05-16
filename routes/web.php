<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutinaController;
use App\Http\Controllers\NutricionController;
use App\Http\Controllers\Controller;


Route::get('/welcome', [RutinaController::class, 'index'])->name('welcome');


Route::get('/rutinas', [RutinaController::class, 'mostrar'])->name('rutinas');

Route::get('/nutricion', [NutricionController::class, 'mostrar'])->name('nutricion');