<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



Route::get('/', [PageController::class, 'index']);
Route::get('/galeri', [PageController::class, 'galeri']);
Route::get('/kontak', [PageController::class, 'kontak']);
Route::get('/destinasi', [PageController::class, 'destinasi']);
Route::get('/tentang', [PageController::class, 'tentang']);
