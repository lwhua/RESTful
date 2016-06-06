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


$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/index', 'IndexController@index');
$app->get('/test', 'Home\TestController@index');

/*
$api = app('Dingo\Api\Routing\Router');
// $api = $app['api.router'];

$api->version('v1', function ($api) {
    $api->get('/users/{id}', 'App\Api\V1\Controllers\UserController@show');
});

$api->version('v2', function ($api) {
    $api->get('/users/{id}', 'App\Api\V2\Controllers\UserController@show');
});*/