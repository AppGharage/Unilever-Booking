<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\MeetingRoom;

class DashboardController extends Controller
{
            /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $bookings = Booking::orderBy('meeting_room', 'desc')->paginate(6);
        return view('dashboard')->with('bookings', $bookings);
        
    }
    public function meetingRoom(){
        $meeting_rooms = MeetingRoom::orderBy('description', 'desc')->paginate(5);
        return view('dashboard')->with('meeting_rooms', $meeting_rooms);
    }
}
