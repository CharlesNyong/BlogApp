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
//     //return "Hello world";
// });

/* Route::get('/hello', function () {
     //return view('welcome');
     return "<h2>Hello world</h2>";
 });

Route::get('/users/{id}/{name}', function ($id, $name) {
    return "This user id = ".$id . " username = ". $name;
    //return "Hello world";
});
*/
// calls the index function in the PagesController file (this is the controller file) 
Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');


Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
