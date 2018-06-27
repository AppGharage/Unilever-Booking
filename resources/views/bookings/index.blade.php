@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <br> <br>
<div class="main">

    <div class="the-card">
            <div class="card-header text-light the-header">
                    <b>Reservations</b>        
            </div>
                <div class=" text-center text-secondary">
                        @if(count($bookings) > 0)
                                    <div class="table-responsive">
                                        <table class=" container table text-secondary">
                                            <tr class="thead-light">
                                                <th>Meeting Room</th>
                                                <th>Agenda</th>
                                                <th>Booked For</th>
                                                <th>Booked By</th>
                                                <th>status</th>
                                                <th>Date</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Action</th>
                                            </tr>
                                                @foreach($bookings as $booking)
                                                    <tr>
                                                        <td><a class="text-info" href="/bookings/{{$booking->id}}">{{$booking->meeting_room}}</a></td>
                                                        <td>{{$booking->agenda}}</td>
                                                        <td>{{$booking->booked_for}}</td>
                                                        <td>{{$booking->booked_by}}</td>
                                                        <td>{{$booking->status}}</td>
                                                        <td>{{$booking->date}}</td>
                                                        <td>{{$booking->start_time}}</td>
                                                        <td>{{$booking->end_time}}</td>
                                                        <td><a href="/bookings/{{$booking->id}}" class ="btn btn-sm view-btn">View</a></td>
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
    @endsection