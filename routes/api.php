<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/create-member');
Route::post('/login', array('uses' => 'Auth\LoginController@login'));

//Route::get('members', 'MemberController@create')->name('members.create');
Route::post('members', 'MemberController@store')->name('members.store');

Route::post('edit/{id}','MemberController@edit')->name('members.edit');