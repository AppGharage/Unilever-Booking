<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\MeetingRoom;
use App\Team;
use App\AttendanceList;

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
        $bookings = Booking::orderBy('meeting_room', 'desc')->paginate(8);
        $rooms = MeetingRoom::orderBy('name', 'desc')->paginate(4);
        $teams = Team::orderBy('name', 'desc')->paginate(2);
        return view('dashboard')
        ->with('bookings', $bookings)
        ->with('rooms', $rooms)
        ->with('teams', $teams)
        ->with('bookings_count', Booking::all())
        ->with('rooms_count', MeetingRoom::all())
        ->with('teams_count', Team::all())
        ->with('attendees_count', AttendanceList::all());
        ;
    }
}
