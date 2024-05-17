<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutinaController;
use App\Http\Controllers\NutricionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IMCController;
use App\Http\Controllers\Controller;

// routes/web.php
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');






Route::get('/rutinas', [RutinaController::class, 'mostrar'])->name('rutinas');

Route::get('/nutricion', [NutricionController::class, 'mostrar'])->name('nutricion');

Route::get('/imc', [IMCController::class, 'mostrarIMC'])->name('imc');

Route::get('/contact', [ContactController::class, 'mostrarContacto'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
