<?php

use App\Http\Controllers\PostController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher;

Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');

Route::get('/posts',[PostController::class,'index'])->name('posts.index');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::get('posts/{post}/edite', [PostController::class, 'edite'])->name('posts.edite');

Route::put('posts/{posts}', [PostController::class, 'update'])->name('posts.update');

 Route::get('/posts/{post}', [PostCOntroller::class, 'show'])->name('posts.show');
