<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('get')->group(function () {
    Route::get('/All', [ArticleController::class,'getAll'] );
    Route::get('/ById/{id}', [ArticleController::class,'getById'] );   
    });