@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <br> <br>
<div class="main">

    <div class="the-card">
            <div class="card-header text-light the-header">
                    <a href="/rooms/create"><i class="fas fa-plus-square plus-btn btn btn-light"></i></a><b>Meeting Rooms</b>        
            </div>
                <div class=" text-center text-secondary">
                        @if(count($meeting_rooms) > 0)
                                    <div class="table-responsive">
                                        <table class=" container table text-secondary">
                                            <tr class="thead-light">
                                                <th>Room Name</th>
                                                <th>Description</th>
                                                <th>Capacity</th>
                                                <th>Action</th>
                                            </tr>
                                                @foreach($meeting_rooms as $meeting_room)
                                                    <tr>
                                                        <td><a class="text-info" href="/rooms/{{$meeting_room->id}}">{{$meeting_room->name}}</a></td>
                                                        <td>{{$meeting_room->description}}</td>
                                                        <td>{{$meeting_room->capacity}}</td>
                                                        <td><a href="/rooms/{{$meeting_room->id}}" class ="btn btn-sm view-btn">View</a></td>
                                                    </tr>
                                                @endforeach
                                        </table>  
                                    </div> 
                            {{$meeting_rooms->links()}}
                        @else
                            <p>No Meeting Rooms Available :'(</p>
                        @endif
               
            </div>
        </div>
    @endsection