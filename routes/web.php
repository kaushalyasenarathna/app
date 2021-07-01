<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

 
Route::get('/', function () {
    return view('welcome');
});

 
 
Route::middleware(['auth:sanctum', 'verified'])->prefix('dashboard')->group( function () {
    
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('article', ArticleController::class);

    Route::any('article1', [ArticleController::class, 'index'])->name('article');

});