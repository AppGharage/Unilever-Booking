@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="main">
            <div class="top-cards">
                <div class="top-container">
                    <div class="left-item">
                        <div class="available-rooms all-cards">
                                <div class="sub-header ">
                                        <b class="">Recent Reservations</b>        
                                </div>
                                    <div class="container text-center text-secondary">
                                            @if(count($bookings) > 0)
                                                        <div class="container table-responsive">
                                                            <table class=" container table text-secondary">
                                                                <tr class="">
                                                                    <th class="th">Meeting Room</th>
                                                                    <th class="th">Agenda</th>
                                                                    <th class="th">Booked For</th>
                                                                    <th class="th">Status</th>
                                                                    <th class="th">Start Time</th>
                                                                </tr>
                                                                    @foreach($bookings as $booking)
                                                                        <tr>
                                                                            <td class="td"><a class="text-secondary" href="/bookings/{{$booking->id}}">{{$booking->meeting_room}}</a></td>
                                                                            <td class="td">{{$booking->agenda}}</td>
                                                                            <td class="td">{{$booking->booked_for}}</td>
                                                                            <td class="td">{{$booking->status}}</td>
                                                                            <td class="td">{{$booking->start_time}}</td>
                                                                        </tr>
                                                                    @endforeach
                                                            </table>  
                                                        </div> 
                                            @else
                                                <p>No Reservations Available :'(</p>
                                            @endif
                                   
                                </div>
                        </div>
                    </div>
                    <div class="right-items">
                        <div class="booked-rooms  all-cards">
                                <div class="sub-header ">
                                        <b class="">Teams</b>        
                                </div>
                                    <div class=" container text-center text-secondary">
                                            @if(count($teams) > 0)
                                                        <div class="container table-responsive">
                                                            <table class=" container table text-secondary">
                                                                <tr class="">
                                                                    <th class="th">Team Name</th>
                                                                    <th class="th">Description</th>
                                                                </tr>
                                                                    @foreach($teams as $team)
                                                                        <tr>
                                                                            <td class="td"><a class="text-secondary" href="/teams/{{$team->id}}">{{$team->name}}</a></td>
                                                                            <td class="td">{{$team->description}}</td>
                                                                        </tr>
                                                                    @endforeach
                                                            </table>  
                                                        </div> 
                                            @else
                                                <p>No Meeting Rooms Available :'(</p>
                                            @endif
                                   
                                </div>
                        </div>
                        <div class="data-cube all-cards" style="padding-top:30px;">
                                <h1 class="icon-text"style="color: #09B394;font-size:20px;">Reservations <br><b class="card-value">{{count($bookings_count)}}</b></h1>
                        </div>

                        <div class="data-cube all-cards">
                        <div class="data-cube all-cards" style="padding-top:30px;">
                           <p class="icon-text"style="color: #535AAD;font-size:20px;">Rooms <br><b class="card-value">{{count($rooms_count)}}</b></p>
                   
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-cards">
                <div class="left-item">
                    <div class="requests all-cards">
                            <div class="sub-header ">
                                    <b class="">Meeting Rooms</b>        
                            </div>
                                <div class=" container text-center text-secondary">
                                        @if(count($rooms) > 0)
                                                    <div class="container table-responsive">
                                                        <table class=" container table text-secondary">
                                                            <tr class="">
                                                                <th class="th">Room Name</th>
                                                                <th class="th">Description</th>
                                                                <th class="th">Size</th>
                                                            </tr>
                                                                @foreach($rooms as $room)
                                                                    <tr>
                                                                        <td class="td"><a class="text-secondary" href="/rooms/{{$room->id}}">{{$room->name}}</a></td>
                                                                        <td class="td">{{$room->description}}</td>
                                                                        <td class="td">{{$room->capacity}}</td>
                                                                    </tr>
                                                                @endforeach
                                                        </table>  
                                                    </div> 
                                        @else
                                            <p>No Meeting Rooms Available :'(</p>
                                        @endif
                               
                            </div>
                    </div>
                </div>
                <div class="bottom-right">
                    <div class="data-cube all-cards" style="padding-top:30px;">
                        <p class="icon-text" style="color:#28ADCA;font-size:20px;">Attendees <br><b class="card-value">{{count($attendees_count)}}</b></p>
                
                    </div>
                    <div class="data-cube all-cards" style="padding-top:30px;">
                                <p class="icon-text" style="color:#C55297;font-size:20px;">Teams <br><b class="card-value">{{count($teams_count)}}</b></p>
                        
                    </div>
            </div>
    </div>
    @endsection