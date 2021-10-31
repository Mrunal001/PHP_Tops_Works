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
Route::resource('/ContactUs','ContactUsController');


//admin routing start here

Route::get('/admin','AdminLoginController@index');
Route::get('/admin/dashboard','AdminDashboardController@index');
Route::resource('/admin/addtechnology','AdminAddTechnology');
Route::get('/admin/manageaddtechnology','AdminAddTechnology@show');
Route::get('/ReadTechnology/{id}','AdminAddTechnology@read');
Route::get('/ManageAddtechnology/{id}','AdminAddTechnology@destroy');
Route::get('/EditAddtechnology/{id}','AdminAddTechnology@edit');
Route::post('/UpdateAddTechnology/{id}','AdminAddTechnology@update');
//default auth

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', function () {
//      return view('welcome');
//     // echo  "<h2 align='center' style='color:red'>Welcome to Laravel</h2>";

// });

