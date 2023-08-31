<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/askar', function () {
    return view('askar');
});

Route::get('/nupal', function () {
    return view('nupal', [
        "name" => "Naufal Tri Subakti",
        "class" => "TRPL A2",
        "from" => "Kulonprogo",
        "image" => "nupal.png"
    ]);
});
