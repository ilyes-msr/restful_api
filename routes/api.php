<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LessonController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\RelationshipController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\TagController;
use Illuminate\Support\Facades\Response;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/v1'], function () {

    Route::apiResource('lessons', LessonController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('tags', TagController::class);

    Route::any('lesson', function () {
        $message = 'Update your code';

        return Response::json($message, 404);
    });

    // Route::redirect('lesson', 'lessons');

    Route::any('user', function () {
        return 'Update your code';
    });

    Route::redirect('user', 'users');

    Route::any('tag', function () {
        return 'Update your code';
    });

    Route::redirect('tag', 'tags');

    Route::get('users/{id}/lessons', [RelationshipController::class, 'userLessons']);
    Route::get('lessons/{id}/tags', [RelationshipController::class, 'lessonTags']);
    Route::get('tags/{id}/lessons', [RelationshipController::class, 'tagLessons']);
    Route::get('login', [LoginController::class, 'login'])->name('login');
});

/*
Route::domain('{account}.myapp.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
    });
});
Route::get('lessons/{lesson:slug}', function ($lesson) {
    return $lesson;
});
Route::fallback(function () {
});

*/