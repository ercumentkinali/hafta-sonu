<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('index.default');
});
Route::get('/news', [NewsController::class, 'news']);
