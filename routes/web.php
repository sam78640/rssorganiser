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
    return view('pages.home');
});
Route::get('/auth/login', function () {
    return view('pages.login');
});
Route::get('/auth/signup', function () {
    return view('pages.signup');
});
Route::post('rssresults', [
    'as' => 'pages.results',
    'uses' => 'UsersController@rss_search'
]);

