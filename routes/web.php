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

Route::resource('bookings','BookingsController');
Route::resource('team-members','TeamMembersController');
Route::resource('teams','TeamsController');
Route::resource('rooms','MeetingRoomsController');
Route::resource('attendance-lists','AttendanceListsController');

Route::get('/bookings', 'BookingsController@index');
Route::get('/rooms', 'MeetingRoomsController@index');
Route::get('/rooms/create', 'MeetingRoomsController@create');
Route::get('/create', 'BookingsController@create');
Auth::routes();

// GETTING VALUES

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/', 'DashboardController@index');
