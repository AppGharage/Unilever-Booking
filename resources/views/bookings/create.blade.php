@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="main">
    <br><br>
                         <div class="the-card">
                                <div class="card-header the-header">
                                        <b> <i class="fas fa-calendar-plus"></i> Book Room</b>        
                                </div>
                                <div class="container the-card">
                                    {!! Form::open(['action'=> 'BookingsController@store', 'method' => 'POST'] ) !!}
                                    <div class="the-form">
                                        {{form::label('meeting_room', 'Meeting Room')}}
                                        {{form::text('meeting_room', '', ['class' => 'form-control', 'placeholder' => 'Room 12'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('agenda', 'Agenda')}}
                                        {{form::text('agenda', '', ['class' => 'form-control', 'placeholder' => 'Conference'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('booked_for', 'Booked For')}}
                                        {{form::text('booked_for', '', ['class' => 'form-control', 'placeholder' => 'Idris Alba'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('booked_by', 'Booked By')}}
                                        {{form::text('booked_by', $user->last_name, ['class' => 'form-control', 'placeholder' => 'Nathan'])}}
                                    </div>  
                                    <br>
                                    <div class="the-form">
                                            <label for="date">Date</label>
                                            <input type="date" id="date" name="date"
                                                   value="2018-07-22"
                                                   min="2018-01-01" max="2048-12-31" />
                                       
                                    </div>
                                    
                                    <div>
                                            <label for="start">Start Time</label>
                                            <input type="time" id="start_time" name="start_time"
                                           min="9:00" max="18:00" required />
                                        <label for="end_time">End Time</label>
                                                <input type="time" id="end_time" name="end_time"
                                               min="9:00" max="18:00" required />
                                               
                                    </div>
                                    <div class="the-form">
                                        {{ form::label('booked', 'Booked')}}
                                        <input class="status" checked="checked" name="status" type="radio" value="Booked">
                                        {{ form::label('available', 'Available')}}
                                        <input class="status"  name="status" type="radio" value="Available">
                                    </div> 
                                    <br>
                                    <div class="center-btn">
                                       {{form::submit('Reserve Room', ['class'=> 'the-button btn btn-sm view-btn '])}}
                                    </div>    
                                     {!! Form::close() !!}
                            </div>
                        </div> 
    </div>
@endsection