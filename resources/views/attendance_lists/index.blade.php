@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <br> <br>
<div class="main">

    <div class="the-card">
            <div class="card-header text-light the-header">
                    <a href="/attendance-lists/create"><i class="fas fa-user-plus  plus-btn btn btn-light"></i></a><b>attendance_lists</b>        
            </div>
                <div class=" text-center text-secondary">
                        @if(count($attendance_lists) > 0)
                                    <div class="table-responsive">
                                        <table class=" container table text-secondary">
                                            <tr class="thead-light">
                                                <th>Staff Id</th>
                                                <th>Booking Id</th>
                                                <th>Action</th>
                                            </tr>
                                                @foreach($attendance_lists as $attendance_list)
                                                    <tr>
                                                        <td><a class="text-info" href="/attendance-lists/{{$attendance_list->id}}">{{$attendance_list->staff_id}}</a></td>
                                                        <td>{{$attendance_list->booking_id}}</td>
                                                        <td><a href="/attendance-lists/{{$attendance_list->id}}" class ="btn btn-sm view-btn">View</a></td>
                                                    </tr>
                                                @endforeach
                                        </table>  
                                    </div> 
                            {{$attendance_lists->links()}}
                        @else
                            <p>No Attendees  Available :'(</p>
                        @endif
               
            </div>
        </div>
    @endsection