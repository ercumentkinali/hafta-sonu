<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', [NewsController::class, 'index']);
Route::get('/news', [NewsController::class, 'news'])->name('news');
