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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/details', function () {
        return view('details');
    })->name('details');


    Route::get('/order', function () {
        return view('order');
    })->name('order');


    Route::get('/static', function () {
        return view('static');
    })->name('static');


    Route::get('/docs', function () {
        return view('document');
    })->name('docs');
});