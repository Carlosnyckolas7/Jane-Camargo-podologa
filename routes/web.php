<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('site.home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('site.about');
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'services'])->name('site.services');
Route::get('/', [App\Http\Controllers\NomeController::class, 'nome'])->name('site.nome');
Route::post('/', [App\Http\Controllers\NomeController::class, 'nome_enviar'])->name('site.nome');
