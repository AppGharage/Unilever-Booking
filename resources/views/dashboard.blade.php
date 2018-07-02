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
                                    <div class=" container text-center text-secondary">
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
                        <div class="data-cube all-cards">
                                <i class="fas fa-clipboard-check cube-icon" style="color: #09B394;"></i>
                                <p class="icon-text"style="color: #09B394;">Reservations <br><b class="card-value">{{count($bookings_count)}}</b></p>
                        </div>

                        <div class="data-cube all-cards">
                            <i class="fas fa-th-large  cube-icon" style="font-size:48px;color: #535AAD; padding: 10px 53px 0px 53px;"></i>
                           <p class="icon-text"style="color: #535AAD;">Rooms <br><b class="card-value">{{count($rooms_count)}}</b></p>
                   
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
                    <div class="data-cube all-cards">
                        <i class="fas fa-list-alt cube-icon" style="font-size:48px; color:#28ADCA;padding: 10px 53px 0px 53px;"></i>
                        <p class="icon-text" style="color:#28ADCA;">Attendees <br><b class="card-value">{{count($attendees_count)}}</b></p>
                
                    </div>
                    <div class="data-cube all-cards">
                                <i class="fas fa-users cube-icon"style="font-size:48px;color:#C55297; padding: 10px 46px 0px 46px;"></i>
                                <p class="icon-text" style="color:#C55297;">Teams <br><b class="card-value">{{count($teams_count)}}</b></p>
                        
                    </div>
            </div>
    </div>
    @endsection