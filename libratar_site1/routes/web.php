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


$router->get('/users',['uses' => 'UserControllers@getUsers']);
$router->get('/users', 'UserControllers@index'); // get all usersrecords
$router->post('/users', 'UserControllers@add'); // create new userrecord

$router->get('/users/{id}', 'UserControllers@show'); // get user by id
$router->put('/users/{id}', 'UserControllers@update'); // update user 
$router->patch('/users/{id}', 'UserControllers@update'); // update user 
$router->delete('/users/{id}', 'UserControllers@delete'); // delete 

$router->get('/usersjob', 'UserJobControllers@index'); 
$router->get('/userjob/{id}', 'UserJobControllers@show'); // get user by id
