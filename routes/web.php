<?php

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

// Route::get('/', function () {
//     return view('list');
// });

$router->get('/', [
    'as'   => 'web_Healthcheck',
    'uses' => 'HealthCheckcontroller@index',
    'middleware' => 'auth'
]);

$router->get('status', function () {
    return 'ok';
});
