<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/students/{name?}', [StudentController::class, 'index']);

Route::get('/lecturers', [LecturerController::class, 'index']);

Route::get('/courses', [CourseController::class, 'index']);

Route::get('/course/{id}', [CourseController::class, 'show'])
    ->name('course.detail');

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/{slug}', [ArticleController::class, 'show']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});