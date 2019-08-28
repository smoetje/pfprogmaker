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

use App\packages\Testapp;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    //print("Testing app");
//    dump(get_declared_classes());
    $testje = new Smoetje\Pfprogmaker\Progmaker\Progmaker();
    $testje->new();


//$testje = new \smoetje\testapp\Testapp();
//    $testje = new \smoetje\testapp\Runner();
//    $testje = new \smoetje\Testapp();
//    $testje->getClient();
//    dd($testje);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
