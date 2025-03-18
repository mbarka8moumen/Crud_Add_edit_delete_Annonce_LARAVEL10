<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnnonceController;



Route::get('/annonces', [AnnonceController::class, 'index'])->name('annonces.index');
Route::get('/annonces/create', [AnnonceController::class, 'create'])->name('annonces.create');
Route::post('/annonces', [AnnonceController::class, 'store'])->name('annonces.store');
Route::get('/annonces/{id}', [AnnonceController::class, 'show'])->name('annonces.show');
Route::get('/annonces/{id}/edit', [AnnonceController::class, 'edit'])->name('annonces.edit');
Route::post('/annonces/{id}', [AnnonceController::class, 'update'])->name('annonces.update');
Route::post('/annonces/{id}/delete', [AnnonceController::class, 'destroy'])->name('annonces.destroy');


