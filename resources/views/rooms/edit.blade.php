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
                                        {{form::text('name', $meeting_room->name, ['class' => 'form-control', 'placeholder' => 'Room 12'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('description', 'Description')}}
                                        {{form::text('description', $meeting_room->description, ['class' => 'form-control', 'placeholder' => 'Conference'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('capacity', 'Capacity')}}
                                        {{form::text('capacity', $meeting_room->capacity, ['class' => 'form-control', 'placeholder' => '540cm'])}}
                                    </div>
                                    <br>
                                  
                                    <div class="center-btn">
                                       {{form::submit('Update Room', ['class'=> 'the-button btn btn-sm view-btn '])}}
                                    </div>    
                                     {!! Form::close() !!}
                            </div>
                        </div> 
    </div>
@endsection