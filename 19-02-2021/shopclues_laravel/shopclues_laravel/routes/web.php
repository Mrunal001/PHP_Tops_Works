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
//     return view('welcome');
// });


// Route::get('/prateek',function(){


//     return "Hi i am Prateek";

// });


// Route::get('/',function(){

//     return "<h2 align='center'>Hi i am Meet</center>";
// });

// Route::get('/','Test@index');
// Route::get('/service','Test@services');
// Route::get('/contact','Test@contact');
// Route::get('/name','Test@name');
//Route::resource('/','Test');
// start blogs project blade templating routing


//user panel routing
Route::get('/','BlogsController@index');
Route::get('/AboutUs','AboutController@index');
Route::get('/Login_Auth','LoginController@index');
//Route::resource('/Register','RegisterController');
//load data using dropdown and ajax
// Route::get('Register','RegisterController@index');
// Route::get('Register','RegisterController@index');
Route::resource('/Register','RegisterController');
Route::get('get-state-list','RegisterController@getStateList');
Route::get('get-city-list','RegisterController@getCityList');
Route::resource('/Contact','ContactController');
Route::resource('/Feedback','FeedbackController');


//admin panel routing
#admin Login 
Route::get('/admin','AdminLoginController@index');
Route::get('/admin/Dashboard', 'AdminDashboard@index');
Route::resource('/admin/AddCategory','AdminAddCategory');
Route::resource('/admin/AddBlogs','AdminAddBlog');
Route::get('/admin/ManageCategory', 'AdminAddCategory@show');
Route::get('/readcategory/{id}','AdminAddCategory@read');
Route::get('/destroy/{id}','AdminAddCategory@destroy');
Route::get('/editcategory/{id}','AdminAddCategory@edit');
Route::post('/update/{id}','AdminAddCategory@update');

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes(['verify'=>true]);
// Route::get('/home', 'HomeController@index')->name('home');
