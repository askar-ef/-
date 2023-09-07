<?php

use App\Http\Controllers\PostController;
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

Route::get('/halo', [PostController::class, 'index']);

Route::get('/company', function () {
    return view('company');
});

Route::get('/main', function () {
    return view('layouts.main');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/pricing', function () {
    return view('pricing');
});


Route::get('/nupal', function () {
    return view('nupal', [
        "name" => "Naufal Tri Subakti",
        "class" => "TRPL A2",
        "from" => "Kulonprogo",
        "image" => "nupal.png"
    ]);
});

Route::get('/teman', function () {
    return view('teman', [
        "name" => "Rodrigo Nopal",
        "class" => "SET 2022",
        "from" => "Kulonprogo",
        "image" => "nupal.png"
    ]);
});
