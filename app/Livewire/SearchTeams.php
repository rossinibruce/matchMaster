<?php

namespace App\Livewire;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;

class SearchTeams extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $teamName;
    public $personName;

    public function render()
    {
        $teams = Team::select('teams.*');

        if( $this->teamName )
        {
            $teams = Team::select('teams.*');
            
            $teams = $teams->where('teams.name', 'like', '%'.$this->teamName.'%');
        }

        if( $this->personName )
        {
            $teams = Team::select('teams.*');

            $teams = $teams->join('persons', 'teams.person_id', '=', 'persons.id')
                           ->where('persons.name', 'like', '%'.$this->personName.'%')
                           ->orWhere('persons.lastname', 'like', '%'.$this->personName.'%');
        }

        return view('livewire.search-teams', ['teams' => $teams->paginate(10)]);
    }
}
