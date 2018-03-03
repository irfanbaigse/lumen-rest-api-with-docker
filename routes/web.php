<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

Route::get('/testDatabase', function() {


    return response()->json([]);
});

Route::get('/testCache', function() {
    Cache::put('someKey', 'foobar', 10);

    return Cache::get('someKey');
});
