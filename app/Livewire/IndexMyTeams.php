<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class IndexMyTeams extends Component
{
    public $user;

    public function render()
    {
        $teams = DB::table('persons')
                    ->join('persons_has_teams', 'persons.id', '=', 'persons_has_teams.person_id')
                    ->join('teams', 'teams.id', '=', 'persons_has_teams.team_id')
                    ->where('persons_has_teams.person_id', $this->user->id)
                    ->select('*')
                    ->paginate(10);

        return view('livewire.index-my-teams', ['teams' => $teams]);
    }
}
