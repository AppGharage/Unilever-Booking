<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MeetingRoom;

class MeetingRoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
        $meeting_rooms = MeetingRoom::orderBy('description', 'desc')->paginate(10);
        return view('rooms.index')->with('meeting_rooms', $meeting_rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meeting_rooms = MeetingRoom::orderBy('name', 'desc')->paginate(10);
        return view('rooms.create')->with('meeting_rooms', $meeting_rooms);
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
            'name' => 'required',
            'description'  => 'required',
            'capacity'   => 'required',
        ]);

        //CREATE meeting_room 
        $meeting_room  = new MeetingRoom ;
        $meeting_room ->name  = $request->input('name');
        $meeting_room ->description  = $request->input('description');
        $meeting_room ->capacity  = $request->input('capacity');
        $meeting_room ->save();

        return redirect('/rooms')->with('success', 'Great Job!, Meeting Room  Created! :)');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meeting_room = MeetingRoom::find($id);
        return view('rooms.single')->with('meeting_room', $meeting_room);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $meeting_room = MeetingRoom::find($id);
        return view('rooms.edit')->with('meeting_room', $meeting_room);
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
        //Update meeting room 
        $meeting_room = MeetingRoom::find($id);
        $meeting_room ->name = $request->input('name');
        $meeting_room ->description  = $request->input('description');
        $meeting_room ->capacity  = $request->input('capacity');
        $meeting_room ->save();

        return redirect('/rooms')->with('success', 'Great Job!, Meeting Room Updated! :)');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meeting_room = MeetingRoom::find($id);
        $meeting_room->delete();
        return redirect('/rooms')->with('success','Whohoo! Meeting Room Deleted, Now Lets Add More ;)');
    
    }
    public function read(){
        $meeting_rooms = MeetingRoom::orderBy('name', 'desc')->paginate(10);
    }
}
