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
// Route::get('/' ,function(){
// 	return view('welcome');
// });
Route::get('/','SiteController@home');
Route::get('/singlepost/{post}','SiteController@singlepost');

Route::get('/login', function () {
   if(Auth::user()){
		$users = App\User::all();
		return view('dashboard',compact('users'));
	}
    return view('auth.login');
});
Auth::routes(['register' => false]);


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']])->middleware('role');
	Route::resource('role','RoleController')->middleware('role');
	Route::resource('posts','PostsController');
	Route::resource('materi','MateriController');
	Route::get('my-profile','ProfileController@index');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::get('/posts','PostController@index')->name('posts.index');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});



