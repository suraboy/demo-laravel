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
        'prefix' => 'partners'
    ], function ($route) {
        $route->get('/','PartnerController@index')->name('partners.index');
        $route->get('/create','PartnerController@create')->name('partners.create');
        $route->post('/','PartnerController@insert')->name('partners.insert');
        $route->get('/{id}','PartnerController@show')->name('partners.info');
        $route->post('/update','PartnerController@update')->name('partners.update');
        $route->post("/delete","PartnerController@destroy")->name('partners.delete');
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

    $route->group([
        'prefix' => 'shops'
    ], function ($route){
        $route->get('/','ShopController@show')->name('shops.info');
    });
});


