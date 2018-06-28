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

Route::get('/', 'BookingsController@index');
Route::resource('bookings','BookingsController');
Route::resource('team_members','TeamMembersController');
Route::resource('teams','TeamsController');
Route::resource('meeting_rooms','MeetingRoomsController');
Route::resource('bookings','BookingsController');
Route::get('/bookings', 'BookingsController@index');
Route::get('/rooms', 'MeetingRoomsController@index');
Route::get('/rooms/create', 'MeetingRoomsController@create');
Route::get('/create', 'BookingsController@create');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
