<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news', [NewsController::class, 'showNews'])->name('showNews');

Route::get('/news/{id}',
    [NewsController::class, 'showOneNews'])->
name('news-data-one');

Route::post('/comments/add', [CommentController::class, 'store'])->name('comments.store');


Route::get('/news/add', function () {
    return view('addNews');
})->name('addNews');

Route::post('/news/add', [NewsController::class, 'addNews'])->name('addNew');

Route::post('/request-code', [AuthController::class, 'requestCode'])->name('request-code');
Route::post('/news', [AuthController::class, 'login'])->name('login-user');
