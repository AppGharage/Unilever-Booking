@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <br> <br>
<div class="main">

    <div class="the-card">
            <div class="card-header text-light the-header">
                    <a href="/teams/create"><i class="fas fa-user-plus  plus-btn btn btn-light"></i></a><b>Teams</b>        
            </div>
                <div class=" text-center text-secondary">
                        @if(count($teams) > 0)
                                    <div class="table-responsive">
                                        <table class=" container table text-secondary">
                                            <tr class="thead-light">
                                                <th>Team Name</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                                @foreach($teams as $team)
                                                    <tr>
                                                        <td><a class="text-info" href="/teams/{{$team->id}}">{{$team->name}}</a></td>
                                                        <td>{{$team->description}}</td>
                                                        <td><a href="/teams/{{$team->id}}" class ="btn btn-sm view-btn">View</a></td>
                                                    </tr>
                                                @endforeach
                                        </table>  
                                    </div> 
                            {{$teams->links()}}
                        @else
                            <p>No Teams  Available :'(</p>
                        @endif
               
            </div>
        </div>
    @endsection