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

Route::get('user/{id}/posts', 'MyController@getPosts')->name('user.{id}.posts');

Route::get('user/{id}/roles', 'MyController@getRoles')->name('user.{id}.roles');

Route::get('role/{name}/users', 'MyController@getUsers')->name('role.{name}.users');

Route::get('post/{id}/usersP', 'MyController@getUsersFromPosts')->name('post.{id}.usersP');

