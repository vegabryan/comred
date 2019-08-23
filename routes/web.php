<?php


// adduser
// App\User::create([
// 	'name' => 'Lisseth Picado',
// 	'email' => 'lianpiar@gmail.com',
// 	'password' => bcrypt('123'),
// 	'role'=>'user'
// ]);

App::setlocale('es');

Route::view('/', 'index' )->name('index');
Route::view('/about', 'about' )->name('about');
Route::view('/projects', 'projects' )->name('projects');
Route::view('/services', 'services' )->name('services');
Route::view('/contact', 'contact' )->name('contact');

Route::view('/admin', 'admin.index' )->name('admin');
Route::resource('/admin/users', 'UsersController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
