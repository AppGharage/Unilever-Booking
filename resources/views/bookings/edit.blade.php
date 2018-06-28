@extends('layouts.app')
@include('inc.sidebar')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <br> <br>

    <div class="row justify-content-center">
            <div class="col-md-8 container">
            <div class="the-card">
                <div class="card-header the-header">
                        <b>Update Booking Information</b>        
                </div>
                    <div class="card-body">
                            <a onclick="history.go(-1)"class="btn btn-secondary btn-sm float-right text-light">Back</a>
                            <br>
                    {!! Form::open(['action'=> ['BookingsController@update', $booking->id], 'method' => 'POST'] ) !!}
                    <div class="the-form">
                            {{form::label('meeting_room', 'Meeting Room')}}
                            {{form::text( 'meeting_room', $booking->meeting_room ,  ['class' => 'form-control', 'placeholder' => 'Room 12'])}}
                        </div>
                        <div class="the-form">
                            {{form::label('agenda', 'Agenda')}}
                            {{form::text('agenda', $booking->agenda, ['class' => 'form-control', 'placeholder' => 'Conference'])}}
                        </div>
                        <div class="the-form">
                            {{form::label('booked_for', 'Booked For')}}
                            {{form::text('booked_for',$booking->booked_for, ['class' => 'form-control', 'placeholder' => 'Idris Alba'])}}
                        </div>
                        <div class="the-form">
                            {{form::label('booked_by', 'Booked By')}}
                            {{form::text('booked_by',$booking->booked_by, ['class' => 'form-control', 'placeholder' => 'Nathan'])}}
                        </div>  
                        <br>
                        <div class="the-form">
                                <label for="date">Date</label>
                                <input type="date" id="date" name="date"
                        value="{{$booking->date}}"
                                       min="2018-01-01" max="2048-12-31" />
                           
                        </div>
                        
                        <div>
                                <label for="start">Start Time</label>
                                <input type="time" id="start_time" name="start_time"
                               min="9:00" value="{{$booking->start_time}}"max="18:00" required />
                            <label for="end_time">End Time</label>
                                    <input type="time" value="{{$booking->end_time}}" id="end_time" name="end_time"
                                   min="9:00" max="18:00" required />
                                   
                        </div>
                        <div class="the-form">
                            {{ form::label('booked', 'Booked')}}
                            <input class="status" checked="checked" name="status" type="radio" value="Booked">
                            {{ form::label('available', 'Available')}}
                            <input class="status"  name="status" type="radio" value="Available">
                        </div> 
                        <br>
                        {{form::hidden('_method', 'PUT')}}
                        <div class="center-btn">
                                {{form::submit('Update Booking', ['class'=> 'the-button btn view-btn btn-sm'])}}
                        </div>  
                    {!! Form::close() !!}
              
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection