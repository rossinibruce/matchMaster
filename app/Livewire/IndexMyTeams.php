<?php

namespace App\Livewire;

use App\Models\Person;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class IndexMyTeams extends Component
{
    public function render()
    {
        $user = Auth::user();
        $person = Person::where('user_id', $user->id)->first();

        $teams = DB::table('persons')
                    ->join('persons_has_teams', 'persons.id', '=', 'persons_has_teams.person_id')
                    ->join('teams', 'teams.id', '=', 'persons_has_teams.team_id')
                    ->where('persons_has_teams.person_id', $person->id)
                    ->select('*')
                    ->paginate(10);

        return view('livewire.index-my-teams', ['teams' => $teams]);
    }
}
