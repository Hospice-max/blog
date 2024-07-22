<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/contact-us', 'contact');
    Route::get('/about', 'about');
});

Route::controller(ArticleController::class)->group(function () {
    Route::get('/articles', 'index');
});