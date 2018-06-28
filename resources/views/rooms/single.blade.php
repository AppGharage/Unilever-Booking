@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="main">
                    <div class="the-card ">
                        <div class="card-header text-light the-header">
                                <b> <?php echo"$meeting_room->name"; ?></b>        
                        </div>
                        <div class="container">
                                <br>
                        <a onclick="history.go(-1)"class="btn btn-secondary btn-sm float-right text-light">Back</a>
                        <br> {!! Form::open() !!}
                            <div class="form-group">
                                {{form::label('name', 'Room Name')}}
                                {{form::text('name', $meeting_room->name, ['class' => 'form-control', 'disabled' =>'disabled'] )}}
                            </div>
                            <div class="form-group">
                                {{form::label('agenda', 'Description')}}
                                {{form::text('agenda', $meeting_room->description, ['class' => 'form-control','disabled' =>'disabled'])}}
                            </div>
                            <div class="form-group">
                                {{form::label('booked_for', 'Capacity')}}
                                {{form::text('booked_for', $meeting_room->capacity, ['class' => 'form-control','disabled' =>'disabled'])}}
                            </div>
                            
                                    <div class="the-form">
                                        {{ form::label('status', 'Status')}}
                                        <p>{{$meeting_room->status}}</p>

                                    </div> 
                                    <br>    
                        {!! Form::close() !!}
                                <small>Meeting Room  Created at {{$meeting_room ->created_at}}</small>
                                <hr>
                                <a href="./{{$meeting_room->id}}/edit" class="btn btn-sm btn-primary">Edit Meeting Room </a>
                                {!! Form::open(['action'=> ['MeetingRoomsController@destroy', $meeting_room ->id], 'method' => 'POST', 'class' => 'float-right'] ) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete' ,['class' => 'btn btn-sm btn-danger'])}}
                                {!! Form::close() !!}
                        </div>
                        <br>
                    </div>
        </div>
        </div>
    @endsection