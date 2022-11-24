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
    return view('users/index');
})->name('cyberexpert');
Route::get('/news', function () {
    return view('users/news');
})->name('news');

Route::get('/specialist', function () {
    return view('securityspecialist/specialist');
})->name('specialist');

Route::get('/questionanswer', function () {
    return view('users/questionanswer');
})->name('questionanswer');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
