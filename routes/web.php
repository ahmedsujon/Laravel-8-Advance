<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [ClientController::class, 'index'])->name('posts.getPost');
Route::get('/add-post', [ClientController::class, 'store'])->name('posts.addPost');
Route::get('/posts/{id}', [ClientController::class, 'show'])->name('posts.showById');
Route::get('/update-posts', [ClientController::class, 'update'])->name('posts.updatePost');
Route::get('/delete-post/{id}', [ClientController::class, 'destroy'])->name('posts.deletePost');

Route::get('/fluent-string', [FluentController::class, 'index'])->name('fluent.string');

Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.infoGet');
Route::get('/session/store', [SessionController::class, 'storeSessionData'])->name('session.storeInfo');
Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.forgetInfo');