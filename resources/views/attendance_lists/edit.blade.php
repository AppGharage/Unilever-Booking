@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="main">
    <br><br>
                         <div class="the-card">
                                <div class="card-header the-header">
                                       Update Attendee's Information</b>        
                                </div>
                                <div class="container the-card">
                                    {!! Form::open(['action'=> 'AttendanceListsController@store', 'method' => 'POST'] ) !!}
                                    <div class="the-form">
                                            {{form::label('staff_id', 'Staff Id ')}}
                                            {{form::text('staff_id', $attendance_list->staff_id, ['class' => 'form-control', 'placeholder' => 'STVFF12'])}}
                                        </div>
                                        <div class="the-form">
                                            {{form::label('staff_id', 'Booking Id')}}
                                            {{form::text('booking_id',$attendance_list->booking_id, ['class' => 'form-control', 'placeholder' => '1'])}}
                                        </div>
                                    <br>
                                  
                                    <div class="center-btn">
                                       {{form::submit('Update Attendee', ['class'=> 'the-button btn btn-sm view-btn '])}}
                                    </div>    
                                     {!! Form::close() !!}
                            </div>
                        </div> 
    </div>
@endsection