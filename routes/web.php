<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::group([
    'namespace' => 'Web',
    'middleware' => ['auth']
], function ($route) {
    $route->get('/', 'HomeController@index')->name('home');
    $route->group([
        'prefix' => 'users'
    ], function ($route) {
        $route->get('/','UserController@index')->name('users.index');
    });
});


