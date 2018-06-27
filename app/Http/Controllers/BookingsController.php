<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Booking;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::orderBy('meeting_room', 'desc')->paginate(10);
        return view('bookings.index')->with('bookings', $bookings);
        return view('dashboard')->with('bookings', $bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('bookings.create')->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'meeting_room' => 'required',
            'agenda'  => 'required',
            'booked_for'     => 'required',
            'date'     => 'required',
            'start_time'     => 'required',
            'end_time'     => 'required',
            'status'     => 'required',
        ]);

        //CREATE BOOKING
        $booking = new Booking;
        $booking->meeting_room = $request->input('meeting_room');
        $booking->agenda  = $request->input('agenda');
        $booking->booked_by  = $request->input('booked_by');
        $booking->booked_for  = $request->input('booked_for');
        $booking->date  = $request->input('date');
        $booking->start_time  = $request->input('start_time');
        $booking->end_time  = $request->input('end_time');
        $booking->status  = $request->input('status');
        $booking->save();

        return redirect('/bookings')->with('success', 'Great Job!, Booking Created! :)');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);
       return view('bookings.single')->with('booking', $booking);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('bookings.edit')->with('booking', $booking);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        $booking->meeting_room = $request->input('meeting_room');
        $booking->agenda  = $request->input('agenda');
        $booking->booked_by  = $request->input('booked_by');
        $booking->booked_for  = $request->input('booked_for');
        $booking->date  = $request->input('date');
        $booking->start_time  = $request->input('start_time');
        $booking->end_time  = $request->input('end_time');
        $booking->status  = $request->input('status');
        $booking->save();

        return redirect('/bookings')->with('success', 'Great Job!, Booking Updated! :)');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = booking::find($id);
        $booking->delete();
        return redirect('/bookings')->with('success','Whohoo! Booking Deleted, Now Lets Add More ;)');
    
    }
}
