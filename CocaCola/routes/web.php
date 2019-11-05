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



Auth::routes();

// order  of routes is important!
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'PostsController@index');
Route::get('/post/create', 'PostsController@create');
Route::get('/post/{post}', 'PostsController@show');
Route::post('/post', 'PostsController@store');
Route::get('/post/vote/{id}', 'VoteController@vote');
Route::post('/like/{post}', 'LikesController@store');


// name('') == give a route a specific name
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/dashboard/registered/edit/{id}', 'Admin\DashboardController@registeredit');
    Route::get('/dashboard/register', 'Admin\DashboardController@registered');
    Route::put('/role-update/{id}', 'Admin\DashboardController@registerupdate' );
});

