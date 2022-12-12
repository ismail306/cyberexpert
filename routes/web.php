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

Route::get('/xss', function () {
    return view('users/learnethicalhacking/xss');
})->name('xss');





Route::get('/reflectedxss', function () {
    return view('users/learnethicalhacking/reflectedXSS');
})->name('reflectedxss');

Route::get('/storedxss', function () {
    return view('users/learnethicalhacking/storedxss');
})->name('storedxss');

Route::get('/dombasedxss', function () {
    return view('users/learnethicalhacking/dombasedxss');
})->name('dombasedxss');

Route::get('/sql', function () {
    return view('users/learnethicalhacking/sql');
})->name('sql');




Route::get('/brokenauthentication', function () {
    return view('users/learnethicalhacking/brokauth');
})->name('brokenauthentication');

Route::get('/profile', function () {
    return view('users/profile');
})->name('profile');





Route::get('/blog', function () {
    return view('users/blog');
})->name('blog');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
route::fallback(function () {
    return view('users/404');
});
