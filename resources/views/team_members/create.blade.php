@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="main">
    <br><br>
                         <div class="the-card">
                                <div class="card-header the-header">
                                       Create Room</b>        
                                </div>
                                <div class="container the-card">
                                    {!! Form::open(['action'=> 'MeetingRoomsController@store', 'method' => 'POST'] ) !!}
                                    <div class="the-form">
                                        {{form::label('name', 'Room Name ')}}
                                        {{form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Room 12'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('description', 'Description')}}
                                        {{form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Auditorium'])}}
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