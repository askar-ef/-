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

Route::get('/buku', [PostController::class, 'buku']);
Route::get('/buku/create', [PostController::class, 'create'])->name('buku.create');
Route::post('/buku', [PostController::class, 'store'])->name('buku.store');

Route::get('/buku/update/{id}', [PostController::class, 'update'])->name('buku.update');
Route::post('/buku/update/submit/{id}', [PostController::class, 'updatedata'])->name('buku.updatedata');

Route::post('/buku/delete/{id}', [PostController::class, 'destroy'])->name('buku.destroy');


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
