<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\ColorController::class, 'show']);
route::get('/change-color', [\App\Http\Controllers\ColorController::class, 'index']);
route::post('/change-color', [\App\Http\Controllers\ColorController::class, 'store']);
route::post('/idea-submit', [\App\Http\Controllers\IdeaController::class, 'store']);
