<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Services\Newsletter;

Route::post('newsletter', function () {
    request()->validate(['email' => 'required|email']);

    try {
        (new Newsletter())->subscribe(request('email'));
    } catch (\Exception $e) {
        \Illuminate\Validation\ValidationException::withMessages([
            'email' => 'This email could not be added to the list.'
        ]);
    }

    return redirect('/')->with('success', 'Your newsletter has been subscribed');
});

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::post('/posts/{post:slug}/comments', [CommentController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');


Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');
