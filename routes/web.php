<?php 

use Careminate\Routing\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\SimpleMiddleware;

Route::get('/about', HomeController::class, 'about',[SimpleMiddleware::class]);

Route::group(['prefix' => 'admin'], function() {

    Route::get('users', HomeController::class, 'index',[SimpleMiddleware::class]);
});

 Route::group(['prefix' => 'settings', 'middleware' => ['middleware']], function() {
        Route::get('/setting', HomeController::class, 'setting');
}); 