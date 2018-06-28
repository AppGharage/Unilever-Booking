@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="main">
    <br><br>
                         <div class="the-card">
                                <div class="card-header the-header">
                                       Create Team Member</b>        
                                </div>
                                <div class="container the-card">
                                    {!! Form::open(['action'=> 'TeamMembersController@store', 'method' => 'POST'] ) !!}
                                    <div class="the-form">
                                        {{form::label('team_id', 'Team Id ')}}
                                        {{form::text('team_id', '', ['class' => 'form-control', 'placeholder' => 'T3VM22'])}}
                                    </div>
                                    <div class="the-form">
                                        {{form::label('staff_id', 'Staff Id')}}
                                        {{form::text('staff_id', '', ['class' => 'form-control', 'placeholder' => 'STVFF22'])}}
                                    </div>
                                    <br>
                                  
                                    <div class="center-btn">
                                       {{form::submit('Create Team Member', ['class'=> 'the-button btn btn-sm view-btn '])}}
                                    </div>    
                                     {!! Form::close() !!}
                            </div>
                        </div> 
    </div>
@endsection