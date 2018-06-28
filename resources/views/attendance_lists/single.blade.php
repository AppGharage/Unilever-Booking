@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="main">
                    <div class="the-card ">
                        <div class="card-header text-light the-header">
                                <b> <?php echo"$attendance_list->staff_id"; ?></b>        
                        </div>
                        <div class="container">
                                <br>
                        <a onclick="history.go(-1)"class="btn btn-secondary btn-sm float-right text-light">Back</a>
                        <br> {!! Form::open() !!}
                            <div class="form-group">
                                {{form::label('staff_id', 'Staff Id')}}
                                {{form::text('staff_id',$attendance_list->staff_id, ['class' => 'form-control', 'disabled' =>'disabled'] )}}
                            </div>
                            <div class="form-group">
                                {{form::label('booking_id', 'Booking Id')}}
                                {{form::text('booking_id', $attendance_list->booking_id, ['class' => 'form-control','disabled' =>'disabled'])}}
                            </div>
                                    <br>    
                        {!! Form::close() !!}
                                <small>Attendee Created at {{$attendance_list ->created_at}}</small>
                                <hr>
                                <a href="./{{$attendance_list ->id}}/edit" class="btn btn-sm btn-primary">Edit Attendee </a>
                                {!! Form::open(['action'=> ['AttendanceListsController@destroy', $attendance_list ->id], 'method' => 'POST', 'class' => 'float-right'] ) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete' ,['class' => 'btn btn-sm btn-danger'])}}
                                {!! Form::close() !!}
                        </div>
                        <br>
                    </div>
        </div>
        </div>
    @endsection