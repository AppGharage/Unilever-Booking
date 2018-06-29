<?php

use Illuminate\Http\Request;
Use App\Booking;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('bookings', 'BookingsController@index');
Route::get('bookings/{id}', 'BookingsController@show');
Route::post('bookings', 'BookingsController@store');
Route::put('bookings/{id}', 'BookingsController@update');
Route::delete('bookings/{id}', 'BookingsController@delete');


Route::get('rooms', 'MeetingRoomsController@index');
Route::get('rooms/{id}', 'MeetingRoomsController@show');
Route::post('rooms', 'MeetingRoomsController@store');
Route::put('rooms/{id}', 'MeetingRoomsController@update');
Route::delete('rooms/{id}', 'MeetingRoomsController@delete');

Route::get('team-members', 'TeamMembersController@index');
Route::get('team-members/{id}', 'TeamMembersController@show');
Route::post('team-members', 'TeamMembersController@store');
Route::put('team-members/{id}', 'TeamMembersController@update');
Route::delete('team-members/{id}', 'TeamMembersController@delete');


Route::get('teams', 'TeamController@index');
Route::get('teams/{id}', 'TeamsController@show');
Route::post('teams', 'TeamsController@store');
Route::put('teams/{id}', 'TeamsController@update');
Route::delete('teams/{id}', 'TeamsController@delete');

Route::get('attendance-lists', 'AttendanceListsController@index');
Route::get('attendance-lists/{id}', 'AttendanceListsController@show');
Route::post('attendance-lists', 'AttendanceListsController@store');
Route::put('attendance-lists/{id}', 'AttendanceListsController@update');
Route::delete('attendance-lists/{id}', 'AttendanceListsController@delete');