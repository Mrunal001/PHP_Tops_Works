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
//     // return view('welcome');
//     echo  "<h2 align='center' style='color:red'>Welcome to Laravel</h2>";

// });

// Route::get('/damini', function(){
                                      
//     echo  "<h2 align='center' style='color:red'>Hi damini how are you</h2>";

// });

// Route::get('/','TestController@index');

// Route::get('/','Test2Controller@index');

// Route::get('/admin','AdminController@index');

// Route::get('/','UserController@index');

// Cruid shop template here or Mrunal company webpage

Route::get('/','MrunalController@index');
Route::get('/AboutUs','AboutUsController@index');
Route::get('/Our-Portfolio','OurPortfolioController@index');
Route::get('/Our-Team','AboutUsController@index');
Route::get('/Our-Services','AboutUsController@index');
Route::get('/Login','LoginController@index');
Route::get('/Register/{slug?}','RegisterController@index');
Route::get('/AboutUs','AboutUsController@index');
Route::get('/AboutUs','AboutUsController@index');


// admin routing start here

// Route::get('/admin','');

