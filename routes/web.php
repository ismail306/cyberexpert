<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [IndexController::class, 'index'])->name('cyberexpert');


Route::get('/news', function () {
    return view('users/news');
})->name('news');

Route::get('/specialist', function () {
    return view('securityspecialist/specialist');
})->name('specialist');


Route::post('/create_quesion', [QuestionController::class, 'store'])->middleware(['auth', 'verified'])->name('question.store');
Route::get('/questionanswer', [QuestionController::class, 'question'])->name('questionanswer');
Route::get('/delete_question/{id}', [QuestionController::class, 'delete'])->name('question.delete');


Route::post('/create_answer', [AnswerController::class, 'store'])->middleware(['auth', 'verified'])->name('answer.store');
Route::get('/delete_answer/{id}', [AnswerController::class, 'delete'])->name('answer.delete');
Route::post('/edit_answer', [AnswerController::class, 'update'])->name('answer.edit');


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





//blog Route

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog_create', [BlogController::class, 'create'])->middleware(['auth', 'verified'])->name('blog.create');
Route::post('/blog_create', [BlogController::class, 'store'])->name('blog.store');




//admin Route
Route::get('/superadmin', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.dashboard');
//user_delete
Route::get('/superadmin/user_delete/{id}', [AdminController::class, 'user_delete'])->name('super.user_delete');
//change_role
Route::patch('/superadmin/change_role', [AdminController::class, 'change_role'])->name('super.change_role');

//404page route

require __DIR__ . '/auth.php';


route::fallback(function () {
    return view('users/404');
});
