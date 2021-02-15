<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/login', function () {
    return view('login');
});
Route::get('/login/{id}', function ($id) {
    echo $id;
    return view('loginSucces');
});

Route::redirect('/logout','login');

// Route::get('/users', 'Users@index');
Route::get('/show/{id}', 'Users@show');

Route::view('/sampleView', 'sample');
//login
Route::view('userview','user');
// Route::get('usercontroller','UsersController@account');
Route::post('usercontroller','userscontroller@account');

//Send data
Route::view('users','users');
Route::post('users','Users@indexSendData');