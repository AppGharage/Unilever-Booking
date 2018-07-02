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
        $team_members = TeamMember::orderBy('team_id', 'desc')->paginate(10);
        return view('team_members.index')->with('team_members', $team_members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team_members.create');
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
            'team_id' => 'required',
            'staff_id'  => 'required',
        ]);

        //CREATE team_member 
        $team_member  = new TeamMember;
        $team_member ->team_id  = $request->input('team_id');
        $team_member ->staff_id  = $request->input('staff_id');
        $team_member ->save();

        return redirect('/team-members')->with('success', 'Great Job!, Team Member  Created! :)');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $team_member = TeamMember::find($id);
       return view('team_members.single')->with('team_member', $team_member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $team_member = TeamMember::find($id);
       return view('team_members.edit')->with('team_member', $team_member);
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
       
        $team_member ->team_id  = $request->input('team_id');
        $team_member ->staff_id  = $request->input('staff_id');
        $team_member->save();

        return redirect('/team-members')->with('success', 'Great Job!, Team Member Created! :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $team_member = TeamMember::find($id);
        $team_member->delete();
        return redirect('/team-members')->with('success','Whohoo! Team Member Deleted, Now Lets Add More ;)');
    
    }
}
