<?php

use Careminate\Routing\Route;
use Careminate\FrameworkSetting;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\SimpleMiddleware;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\User\UserController;

Route::get('/', HomeController::class, 'index');

// Route::get('/', function () {
//     FrameworkSetting::setLocale('en');
//     echo trans('app.name');
// });

Route::get('/about', HomeController::class, 'about', [SimpleMiddleware::class]);

// posts
Route::get('posts',PostController::class,'index');
Route::get('posts/create',PostController::class,'create');
Route::post('posts/store',PostController::class,'store');


// users 
Route::get('users',UserController::class,'index');


Route::group(['prefix' => 'admin'], function () {

    Route::get('users', HomeController::class, 'index', [SimpleMiddleware::class]);

    // admin posts
Route::get('posts',PostController::class,'index');
Route::get('posts/create',PostController::class,'create');
Route::post('posts/store',PostController::class,'store');
});

Route::group(['prefix' => 'settings', 'middleware' => ['middleware']], function () {
    Route::get('/setting', HomeController::class, 'setting');
});
