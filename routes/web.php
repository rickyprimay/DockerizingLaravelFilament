<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('', [ArticleController::class, 'index'])->name('index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

