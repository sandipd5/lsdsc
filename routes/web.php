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
Route::get('/team', function () {
    return view('team');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resources([
    'photos' => 'PhotoController',
    'posts' => 'PostController',
    'donations'=>'DonationController',
    'news'=>'NewsController'

]);


Route::get('/gallery','GalleryController@index');
Route::get('/donate','DonorController@index');
