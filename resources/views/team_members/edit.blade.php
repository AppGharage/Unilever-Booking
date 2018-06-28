@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="main">
    <br><br>
                         <div class="the-card">
                                <div class="card-header the-header">
                                      <b> Update Team Member Information</b>        
                                </div>
                                <div class="container the-card">
                                    {!! Form::open(['action'=> 'BookingsController@store', 'method' => 'POST'] ) !!}
                                    <div class="the-form">
                                            {{form::label('team_id', 'Team Id ')}}
                                            {{form::text('team_id', $team_member->team_id, ['class' => 'form-control', 'placeholder' => 'T3VM22'])}}
                                        </div>
                                        <div class="the-form">
                                            {{form::label('staff_id', 'Staff Id')}}
                                            {{form::text('staff_id',$team_member->staff_id, ['class' => 'form-control', 'placeholder' => 'STVFF22'])}}
                                        </div>
                                    <br>
                                  
                                    <div class="center-btn">
                                       {{form::submit('Update Team Member', ['class'=> 'the-button btn btn-sm view-btn '])}}
                                    </div>    
                                     {!! Form::close() !!}
                            </div>
                        </div> 
    </div>
@endsection