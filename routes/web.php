<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Models\Image;

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

Route::get('/', [ImageController::class, 'index']);

Route::get('/images/create', [ImageController::class, 'create']);

Route::post('/images', [ImageController::class, 'store']);

Route::get('/images/{image}/edit', [ImageController::class, 'edit']);

Route::put('/images/{image}', [ImageController::class, 'update']);

Route::delete('/images/{image}', [ImageController::class, 'delete']);

Route::get('/images/{image}', [ImageController::class, 'show']);
