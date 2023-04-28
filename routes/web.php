<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'home'])->name('home');


Route::middleware(['auth'])->group(function(){

    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
   
    Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
    
    Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update');
    
});