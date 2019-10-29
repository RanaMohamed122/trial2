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

/*
Route::get('/hello1', function () {
    return "hello";
});
Route::get('/hello2', function () {
    return "<h1>hello</h1>";
});
Route::get('/hello/{SomeOne}', function ($SomeOne) {
    return "hello".$SomeOne;
});
Route::get('/ddFunction1', function () {
    dd("Check something ....."); //El code hayo2af hena
    return "hello";
});

Route::get('/ddFunction2', function () {
    dd(Post::all());
    return "hello";
});
Route::get('/trial', 'TrialController@trial');
*/
Route::get('/trial', 'TrialController@trial');

Route::get('/Features', function(){
    return "features";
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
