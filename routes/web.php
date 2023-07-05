<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return "This is about page";
// });

// Route::get('/cantact', function () {
//     return "This is contact page";
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {

//     return "This is the user " . $id . " " . $name;
// });

// Route::get('/admin/posts/example', array('as' => 'admin.home', function () {
//     $url = route('admin.home');
//     return "This url is " . $url;
// }));

Route::get('/post/{id}', 'App\Http\Controllers\PostController@index');

Route:: resource('posts', 'PostController');

Route:: get('/contact', 'PostController@contact');

Route::get('/user', 'PostController@user');