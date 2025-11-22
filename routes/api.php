<?php 

use Careminate\Routing\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\SimpleMiddleware;


Route::group(['prefix'=>'/api/','middleware'=>[SimpleMiddleware::class]], function(){
    //api route
    Route::get('/', function () {
       echo "welcome to anonymous api route";
    });

     Route::get('any', HomeController::class, 'api_any', [SimpleMiddleware::class]);
});