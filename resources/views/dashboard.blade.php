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
                        </div>
                    </div>
                    <div class="right-items">
                        <div class="booked-rooms  all-cards">
    
                        </div>
                        <div class="data-cube all-cards">
                                <i class="fas fa-clipboard-check cube-icon"></i>
                                <p class="card-value">{{count($bookings)}}</p>

                        </div>
                        <div class="data-cube all-cards">
                                <p class="card-value">{{count($meeting_rooms)}}</p>

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
                            <p class="card-value">{{count($teams)}}</p>
                    </div>
                    <div class="data-cube all-cards">{{count($attendance_lists)}}</div>
                </div>
            </div>
    </div>
    @endsection