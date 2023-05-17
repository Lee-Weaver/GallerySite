<?php

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

Route::get('/', function () {
    return view('images', [
        'images' => Image::all()
    ]);
});

Route::get('/images/{image}', function (Image $image) {
    return view('image', [
        'image' => $image
    ]);
});
