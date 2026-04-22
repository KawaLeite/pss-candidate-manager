<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\InscricaoController;

Route::get('/candidatos', [InscricaoController::class, 'index'])->name('index.api');
Route::get('/candidatos/{id}', [InscricaoController::class, 'show'])->name('show.api');
Route::post('/candidatos', [InscricaoController::class, 'store'])->name('store.api');
Route::delete('/candidatos/{id}', [InscricaoController::class, 'destroy'])->name('destroy.api');
Route::put('/candidatos/{id}', [InscricaoController::class, 'update'])->name('update.api');