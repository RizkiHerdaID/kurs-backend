<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Kurs Routes
$router->get('kurs', 'KursController@all');
$router->post('kurs', 'KursController@create');
$router->get('kurs/{id}', 'KursController@show');
$router->put('kurs/{id}', 'KursController@update');
$router->delete('kurs/{id}', 'KursController@delete');

// Erate Routes
$router->get('erate', 'ErateController@all');
$router->post('erate', 'ErateController@create');
$router->get('erate/{id}', 'ErateController@show');
$router->put('erate/{id}', 'ErateController@update');
$router->delete('erate/{id}', 'ErateController@delete');

// Usd Routes
$router->get('usd', 'UsdController@all');
$router->post('usd', 'UsdController@create');
$router->get('usd/{id}', 'UsdController@show');
$router->put('usd/{id}', 'UsdController@update');
$router->delete('usd/{id}', 'UsdController@delete');