<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\UserController;

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




Route::get('/create_quesion', [QuestionController::class, 'index'])->name('question.create');
Route::post('/create_quesion', [QuestionController::class, 'store'])->name('question.store');
Route::get('/questionanswer', [QuestionController::class, 'question'])->name('questionanswer');



Route::get('/create_answer', [AnswerController::class, 'index'])->name('answer.create');
Route::post('/create_answer', [AnswerController::class, 'store'])->name('answer.store');

Route::get('/profile', [UserController::class, 'index'])->name('user.profile');
Route::get('/profile_setting', [UserController::class, 'setting'])->name('user.profileSetting');









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
