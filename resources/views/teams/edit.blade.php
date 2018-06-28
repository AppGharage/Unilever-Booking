@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="main">
    <br><br>
                         <div class="the-card">
                                <div class="card-header the-header">
                                       Update Team Information</b>        
                                </div>
                                <div class="container the-card">
                                    {!! Form::open(['action'=> 'TeamsController@store', 'method' => 'POST'] ) !!}
                                    <div class="the-form">
                                            {{form::label('name', 'Team Name ')}}
                                            {{form::text('name', $team->name, ['class' => 'form-control', 'placeholder' => 'Team 12'])}}
                                        </div>
                                        <div class="the-form">
                                            {{form::label('description', 'Description')}}
                                            {{form::text('description', $team->description, ['class' => 'form-control', 'placeholder' => 'Team Description'])}}
                                        </div>
                                    <br>
                                  
                                    <div class="center-btn">
                                       {{form::submit('Update Team', ['class'=> 'the-button btn btn-sm view-btn '])}}
                                    </div>    
                                     {!! Form::close() !!}
                            </div>
                        </div> 
    </div>
@endsection