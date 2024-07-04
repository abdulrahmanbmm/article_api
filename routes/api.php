<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/articles',  [ArticleController::class, 'index']);
Route::get('/articles/{id}',  [ArticleController::class, 'show']);
Route::delete('/articles',  [ArticleController::class, 'destoy']);
Route::get('/articles/search/{title}', [ArticleController::class, 'search']);


// Route::get('/articles',  [ArticleController::class, 'index']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
