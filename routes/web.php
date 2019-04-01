<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an routerlication.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=>'api/v1'], function() use($router){
    $router->get('/conselors', 'ConselorController@index');
    $router->post('/conselor', 'ConselorController@create');
    $router->get('/conselor/{id}', 'ConselorController@show');
    $router->put('/conselor/{id}', 'ConselorController@update');
    $router->delete('/conselor/{id}', 'ConselorController@destroy');
});