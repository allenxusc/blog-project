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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/love/{id}/who/{people?}', function ($id, $people = null) {
    exit('i love '.$id.'万年!'.$people);
})->where(['id' => '[1-9]+', 'people' => '[a-z]+']);