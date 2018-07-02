@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="main">
                    <div class="the-card ">
                        <div class="card-header text-light the-header">
                                <b> <?php echo"$booking->booked_for"; ?>'s Booking</b>        
                        </div>
                        <div class="container">
                                <br>
                        <a onclick="history.go(-1)"class="btn btn-secondary btn-sm float-right text-light">Back</a>
                        <br> {!! Form::open() !!}
                            <div class="form-group">
                                {{form::label('meeting_room', 'Meeting Room')}}
                                {{form::text('meeting_room', $booking ->meeting_room, ['class' => 'form-control', 'disabled' =>'disabled'] )}}
                            </div>
                            <div class="form-group">
                                {{form::label('agenda', 'Agenda')}}
                                {{form::text('agenda', $booking ->agenda, ['class' => 'form-control','disabled' =>'disabled'])}}
                            </div>
                            <div class="form-group">
                                {{form::label('booked_for', 'Booked For')}}
                                {{form::text('booked_for', $booking ->booked_for, ['class' => 'form-control','disabled' =>'disabled'])}}
                            </div>
                            <div class="form-group">
                                {{form::label('email', 'Email')}}
                                {{form::email('email', $booking ->booked_by, ['class' => 'form-control','disabled' =>'disabled'])}}
                            </div>  
                            <div class="form-group">
                                {{form::label('booked_by', 'Booked By')}}
                                {{form::text('booked_by', $booking ->booked_by, ['class' => 'form-control','disabled' =>'disabled'])}}
                            </div>  
                            <br>
                                    <div class="the-form">
                                            <label for="date">Date</label>
                                            <input type="date" id="date" name="date"
                                                   value="2018-07-22"
                                                   min="2018-01-01" max="2048-12-31" disabled = "disabled" />
                                       
                                    </div>
                                    
                                    <div>
                                            <label for="start">Start Time</label>
                                            <input type="time" value="{{$booking->start_time}}" id="start_time" name="start_time"
                                           min="9:00" max="18:00" disabled = "disabled" required />
                                        <label for="end_time">End Time</label>
                                                <input type="time" id="end_time" name="end_time"
                                               min="9:00" value="{{$booking->end_time}}"max="18:00"disabled = "disabled" required />
                                               
                                    </div>
                                    <div class="the-form">
                                        {{ form::label('status', 'Status')}}
                                        <p>{{$booking->status}}</p>

                                    </div> 
                                    <br>    
                        {!! Form::close() !!}
                                <small>booking  Created at {{$booking ->created_at}}</small>
                                <hr>
                                <a href="./{{$booking ->id}}/edit" class="btn btn-sm btn-primary">Edit booking </a>
                                {!! Form::open(['action'=> ['BookingsController@destroy', $booking ->id], 'method' => 'POST', 'class' => 'float-right'] ) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete' ,['class' => 'btn btn-sm btn-danger'])}}
                                {!! Form::close() !!}
                        </div>
                        <br>
                    </div>
        </div>
        </div>
    @endsection