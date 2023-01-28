<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\XssController;

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



// userprofile
Route::get('/profile', [UserController::class, 'index'])->name('user.profile');
Route::get('/profilesetting', [UserController::class, 'setting'])->name('user.profileSetting');

//admin Route
Route::get('/superadmin', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.dashboard');
Route::get('/superadmin/user_delete/{id}', [AdminController::class, 'user_delete'])->name('super.user_delete');
Route::patch('/superadmin/change_role', [AdminController::class, 'change_role'])->name('super.change_role');

// QuestionRoute
Route::post('/create_quesion', [QuestionController::class, 'store'])->middleware(['auth', 'verified'])->name('question.store');
Route::get('/questionanswer', [QuestionController::class, 'question'])->name('questionanswer');
Route::get('/delete_question/{id}', [QuestionController::class, 'delete'])->name('question.delete');

// Answer Route
Route::post('/createanswer', [AnswerController::class, 'store'])->middleware(['auth', 'verified'])->name('answer.store');
Route::delete('/deleteanswer/{id}', [AnswerController::class, 'delete'])->name('answer.delete');
Route::patch('/editanswer', [AnswerController::class, 'update'])->name('answer.edit');

// Blog Route
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}/', [BlogController::class, 'readfull'])->name('blog.readfull');
Route::get('/blogcreate', [BlogController::class, 'create'])->middleware(['auth', 'verified'])->name('blog.create');
Route::post('/blogreating', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blogupdate/{id}', [BlogController::class, 'update'])->middleware(['auth', 'verified'])->name('blog.update');
Route::patch('/blogupdating', [BlogController::class, 'updating'])->name('blog.updating');
Route::delete('/blogdelete/{id}', [BlogController::class, 'delete'])->middleware(['auth', 'verified'])->name('blog.delete');


// Landing Page Route
Route::get('/', [IndexController::class, 'index'])->name('cyberexpert');


Route::get('/news', function () {
    return view('users/news');
})->name('news');

Route::get('/specialist', function () {
    return view('securityspecialist/specialist');
})->name('specialist');



// Learn Ethical Hacking route
// xss route
Route::get('/xss', [XssController::class, 'index'])->name('xss');

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













require __DIR__ . '/auth.php';

//404page route
Route::get('/404', function () {
    return view('users/404');
})->name('404');


route::fallback(function () {
    return view('users/404');
});
