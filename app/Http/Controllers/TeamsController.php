<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('name', 'desc')->paginate(10);
        return view('teams.index')->with('teams', $teams);
        return view('dashboard')->with('teams', $teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
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
        ]);

        //CREATE team
        $team = new team;
        $team->name = $request->input('name');
        $team->description  = $request->input('description');
        $team->save();

        return redirect('/teams')->with('success', 'Great Job!, Team Created! :)');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $team = Team::find($id);
       return view('teams.single')->with('team', $team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $team = Team::find($id);
       return view('teams.edit')->with('team', $team);
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
        $team->name = $request->input('name');
        $team->description  = $request->input('description');
        $team->save();

        return redirect('/teams')->with('success', 'Great Job!, Team Created! :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = team::find($id);
        $team->delete();
        return redirect('/teams')->with('success','Whohoo! Team Deleted, Now Lets Add More ;)');
    
    }
}
