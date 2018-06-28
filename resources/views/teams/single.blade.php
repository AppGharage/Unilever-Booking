@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="main">
                    <div class="the-card ">
                        <div class="card-header text-light the-header">
                                <b> <?php echo"$team->name"; ?></b>        
                        </div>
                        <div class="container">
                                <br>
                        <a onclick="history.go(-1)"class="btn btn-secondary btn-sm float-right text-light">Back</a>
                        <br> {!! Form::open() !!}
                            <div class="form-group">
                                {{form::label('name', 'Team Name')}}
                                {{form::text('name',$team->name, ['class' => 'form-control', 'disabled' =>'disabled'] )}}
                            </div>
                            <div class="form-group">
                                {{form::label('agenda', 'Description')}}
                                {{form::text('agenda', $team->description, ['class' => 'form-control','disabled' =>'disabled'])}}
                            </div>
                                    <br>    
                        {!! Form::close() !!}
                                <small>Team Created at {{$team ->created_at}}</small>
                                <hr>
                                <a href="./{{$team ->id}}/edit" class="btn btn-sm btn-primary">Edit Team </a>
                                {!! Form::open(['action'=> ['TeamsController@destroy', $team ->id], 'method' => 'POST', 'class' => 'float-right'] ) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete' ,['class' => 'btn btn-sm btn-danger'])}}
                                {!! Form::close() !!}
                        </div>
                        <br>
                    </div>
        </div>
        </div>
    @endsection