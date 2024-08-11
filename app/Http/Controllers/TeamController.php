<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = DB::table('persons')
                    ->join('persons_has_teams', 'persons.id', '=', 'persons_has_teams.person_id')
                    ->join('teams', 'teams.id', '=', 'persons_has_teams.team_id')
                    ->where('persons_has_teams.person_id', Auth::user()->id)
                    ->select('*')
                    ->paginate(10);


        return view('app.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sports = Sport::get();

        return view('app.teams.create', compact('sports'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $team = Team::create($request->input('team'));
        $arrayTeam = [$request->input('team.user_id')];
        $team->persons()->attach($arrayTeam);

        $team->sports()->sync($request->input('teamSports'));

        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        $sports = Sport::get();

        return view('app.teams.edit', compact('team', 'sports'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $team->update($request->input('team'));

        $team->sports()->sync($request->input('teamSports'));

        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
