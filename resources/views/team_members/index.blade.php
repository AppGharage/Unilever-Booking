@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <br> <br>
<div class="main">

    <div class="the-card">
            <div class="card-header text-light the-header">
                    <a href="/team-members/create"><i class="fas fa-plus-square plus-btn btn btn-light"></i></a><b>Team Members</b>        
            </div>
                <div class=" text-center text-secondary">
                        @if(count($team_members) > 0)
                                    <div class="table-responsive">
                                        <table class=" container table text-secondary">
                                            <tr class="thead-light">
                                                <th>Team Id</th>
                                                <th>Staff Id</th>
                                                <th>Action</th>
                                            </tr>
                                                @foreach($team_members as $team_member)
                                                    <tr>
                                                        <td><a class="text-info" href="/team-members/{{$team_member->id}}">{{$team_member->team_id}}</a></td>
                                                        <td>{{$team_member->staff_id}}</td>
                                                        <td><a href="/team-members/{{$team_member->id}}" class ="btn btn-sm view-btn">View</a></td>
                                                    </tr>
                                                @endforeach
                                        </table>  
                                    </div> 
                            {{$team_members->links()}}
                        @else
                            <p>No Team Members Available :'(</p>
                        @endif
               
            </div>
        </div>
    @endsection