@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="main">
    <br><br>
                         <div class="the-card">
                                <div class="card-header the-header">
                                       Update Room Information</b>        
                                </div>
                                <div class="container the-card">
                                    {!! Form::open(['action'=> 'BookingsController@store', 'method' => 'POST'] ) !!}
                                    <div class="the-form">
                                        {{form::label('room_name', 'Room Name ')}}
                                        {{form::text('meeting_room', '', ['class' => 'form-control', 'placeholder' => 'Room 12'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('agenda', 'Agenda')}}
                                        {{form::text('agenda', '', ['class' => 'form-control', 'placeholder' => 'Conference'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('capacity', 'Capacity')}}
                                        {{form::text('capacity', '', ['class' => 'form-control', 'placeholder' => '540cm'])}}
                                    </div>
                                    <br>
                                  
                                    <div class="center-btn">
                                       {{form::submit('Create Room', ['class'=> 'the-button btn btn-sm view-btn '])}}
                                    </div>    
                                     {!! Form::close() !!}
                            </div>
                        </div> 
    </div>
@endsection