<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttendanceList;

class AttendanceListsController extends Controller
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
        $attendance_lists = AttendanceList::orderBy('staff_id', 'desc')->paginate(10);
        return view('attendance_lists.index')->with('attendance_lists', $attendance_lists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendance_lists.create');
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
            'staff_id'  => 'required',
            'booking_id' => 'required',
        ]);

        //CREATE Attendance List
        $attendance_list = new AttendanceList;
        $attendance_list->staff_id = $request->input('staff_id');
        $attendance_list->booking_id  = $request->input('booking_id');
        $attendance_list->save();

        return redirect('/attendance-lists')->with('success', 'Great Job!, Attendee Created! :)');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attendance_list = AttendanceList::find($id);
       return view('attendance_lists.single')->with('attendance_list', $attendance_list);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $attendance_list = AttendanceList::find($id);
       return view('attendance_lists.edit')->with('attendance_list', $attendance_list);
    
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
        return view('attendance_lists.index')->with('success', "You're not allowed to make those updates :)");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
