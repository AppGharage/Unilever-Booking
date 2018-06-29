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
                                        <b class="">Reservations</b>        
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
                                                                            <td class="td"><a class="text-secondary" dref="/bookings/{{$booking->id}}">{{$booking->meeting_room}}</a></td>
                                                                            <td class="td">{{$booking->agenda}}</td>
                                                                            <td class="td">{{$booking->booked_for}}</td>
                                                                            <td class="td">{{$booking->status}}</td>
                                                                            <td class="td">{{$booking->start_time}}</td>
                                                                        </tr>
                                                                    @endforeach
                                                            </table>  
                                                        </div> 
                                                {{$bookings->links()}}
                                            @else
                                                <p>No Reservations Available :'(</p>
                                            @endif
                                   
                                </div>
                        </div>
                    </div>
                    <div class="right-items">
                        <div class="booked-rooms  all-cards">
    
                        </div>
                        <div class="data-cube all-cards">
                                <i class="fas fa-clipboard-check cube-icon"></i>
                                <p class="icon-text">Reservations <br><b class="card-value">{{count($bookings)}}</b></p>
                        </div>
                        <div class="data-cube all-cards">
                                {{-- <p class="card-value">{{count($meeting_rooms)}}</p> --}}
                                <i class="fas fa-list-alt cube-icon" style="font-size:48px; padding: 10px 53px 0px 53px;"></i>
                                <p class="icon-text">Attendees <br><b class="card-value">0</b></p>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-cards">
                <div class="left-item">
                    <div class="requests all-cards">
                    </div>
                </div>
                <div class="bottom-right">
                    <div class="data-cube all-cards">
                            {{-- <p class="card-value">{{count($teams)}}</p> --}}
                                 <i class="fas fa-th-large  cube-icon" style="font-size:48px; padding: 10px 53px 0px 53px;"></i>
                                <p class="icon-text">Rooms <br><b class="card-value">0</b></p>
                        
                    </div>
                    <div class="data-cube all-cards">
                            {{-- <p class="card-value">{{count($attendance_lists)}}</p></div> --}}
                                <i class="fas fa-users cube-icon"style="font-size:48px; padding: 10px 46px 0px 46px;"></i>
                                <p class="icon-text">Teams <br><b class="card-value">0</b></p>
                        
                </div>
            </div>
    </div>
    @endsection