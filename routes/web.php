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

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/clases', function () {
    return view('clases');
})->name('clases');

Route::middleware(['auth:sanctum', 'verified'])->get('/listas', function () {
    return view('lista');
})->name('listas');

Route::middleware(['auth:sanctum', 'verified'])->get('/prevencion', function () {
    return view('prevencion');
})->name('prevencion');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
