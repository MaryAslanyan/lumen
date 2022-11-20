<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['namespace' => 'Api/User', 'prefix' => 'api/user'], function () use ($router) {
    // Authorization
    $router->post('register', 'RegisterController@register');
    $router->post('sign-in', 'SignInController@signIn');

    // Password recovery
    $router->post('recover-password', 'RecoverPasswordController@sendResetLinkEmail');
    $router->patch('recover-password', 'RecoverPasswordController@reset');

    // Company routes
    $router->group(['middleware' => 'auth'], function () use ($router) {
        $router->get('companies', 'CompanyController@index');
        $router->post('companies', 'CompanyController@store');
        $router->delete('companies/{company}', 'CompanyController@destroy');
    });
});
