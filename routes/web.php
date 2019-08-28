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

Route::redirect('/', '/login');

Auth::routes(['reset' => false, 
    'register'=> false, 
    'verify' => false
    ]);


Route::get('/home', 'HomeController@index')->name('home'); //Sends to Home Page after logging in

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout'); //Logs out when going to this page

//Route::get('/members', 'HomeController@members')->name('members');
Route::get('members', 'MemberController@create')->name('members.create');
//Route::post('members', 'MemberController@store')->name('members.store');

Route::get('edit/{id}','MemberController@show')->name('member.show');
