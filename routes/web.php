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
        $route->get('/create','UserController@create')->name('users.create');
        $route->post('/','UserController@insert')->name('users.insert');
        $route->get('/{id}','UserController@show')->name('users.info');
        $route->post('/update','UserController@update')->name('users.update');
        $route->post("/delete","UserController@destroy")->name('users.delete');
    });

    $route->group([
        'prefix' => 'orders'
    ], function ($route){
        $route->get('/','OrderController@index')->name('orders.index');
        $route->get('/{id}','OrderController@show')->name('orders.info');
    });

    $route->group([
        'prefix' => 'agent-reports'
    ], function ($route){
        $route->get('/','ReportAgentController@index')->name('agent-report.index');
    });
});


