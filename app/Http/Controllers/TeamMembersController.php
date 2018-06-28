<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeamMember;
class TeamMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_members = TeamMember::orderBy('name', 'desc')->paginate(10);
        return view('team_members.index')->with('team_members', $team_members);
        return view('dashboard')->with('team_members', $team_members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->validate($request, [
            'team_id' => 'required',
            'staff_id'  => 'required',
        ]);

        //CREATE meeting_room 
        $team_member  = new TeamMember ;
        $team_member ->team_id  = $request->input('team_id');
        $team_member ->staff_id  = $request->input('staff_id');
        $team_member ->save();

        return redirect('/team-members')->with('success', 'Great Job!, Team Member  Created! :)');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
