<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\SimpleMiddleware;
use Careminate\FrameworkSetting;
use Careminate\Routing\Route;

Route::group(['prefix' => '/api/', 'middleware' => [SimpleMiddleware::class]], function () {

    Route::get('/', function () {
        FrameworkSetting::setLocale('en');
        echo FrameworkSetting::getLocale();
    });

//api route
    // Route::get('/', function () {
    //     echo "welcome to anonymous api route";
    // });

    Route::get('any', HomeController::class, 'api_any', [SimpleMiddleware::class]);
});
