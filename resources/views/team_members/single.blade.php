@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="main">
                    <div class="the-card ">
                        <div class="card-header text-light the-header">
                                <b> <?php echo"$team_member->team_id"; ?></b>        
                        </div>
                        <div class="container">
                                <br>
                        <a onclick="history.go(-1)"class="btn btn-secondary btn-sm float-right text-light">Back</a>
                        <br> {!! Form::open() !!}

                            <div class="form-group">
                                {{form::label('team_id', 'Team Id')}}
                                {{form::text('team_id', $team_member->team_id, ['class' => 'form-control','disabled' =>'disabled'])}}
                            </div>
                            <div class="form-group">
                                {{form::label('staff_id', 'Staff Id')}}
                                {{form::text('staff_id', $team_member->staff_id, ['class' => 'form-control', 'disabled' =>'disabled'] )}}
                            </div>
                            
                                    <div class="the-form">
                                        {{ form::label('status', 'Status')}}
                                        <p>{{$team_member->status}}</p>

                                    </div> 
                                    <br>    
                        {!! Form::close() !!}
                                <small>Team Member  Created at {{$team_member ->created_at}}</small>
                                <hr>
                                <a href="./{{$team_member ->id}}/edit" class="btn btn-sm btn-primary">Edit Team Member </a>
                                {!! Form::open(['action'=> ['TeamMembersController@destroy', $team_member ->id], 'method' => 'POST', 'class' => 'float-right'] ) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete' ,['class' => 'btn btn-sm btn-danger'])}}
                                {!! Form::close() !!}
                        </div>
                        <br>
                    </div>
        </div>
        </div>
    @endsection