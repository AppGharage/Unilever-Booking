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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return view('MeetingRooms.edit')->with('meeting_room', $meeting_room);
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
        return view('MeetingRooms.edit')->with('meeting_room', $meeting_room);
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

        return redirect('/rooms')->with('success', 'Great Job!, Meeting Room Created! :)');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meeting_room = booking::find($id);
        $meeting_room->delete();
        return redirect('/rooms')->with('success','Whohoo! Meeting Room Deleted, Now Lets Add More ;)');
    
    }
}
