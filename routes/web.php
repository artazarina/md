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

/*Route::get('/', function () {
    return view('welcome');
});

Route:: get('/about', function(){
  return view('pages.about');
});

Route:: get('/users/{id}/{name}', function($id, $name){
  return 'This is user '.$name.' w/ '.$id;
});*/

Route::get('/', 'PagesController@index');

Route::get('/news', function(){
  return view('user/news');
});

Route::get('post', function(){
  return view('user/layouts/post');
})->name('post');

Route::get('/merch', 'ProductController@getMerch');
/*takes you to /admin if you are logged in.
You are taken there from AdminController, then to admin.blade.php
*/
Route::get('/admin', 'AdminController@index');

/*should take you to you to /user if you are logged in.
Is not properly set up yet, tho
*/
Route::get('/user', 'UserController@index');

Auth::routes();

//thing that sends you to a populated store
