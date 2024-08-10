<?php

namespace App\Livewire;

use Livewire\Component;

class UserIndex extends Component
{
    public $person;
    public $user;

    public function render()
    {
        return view('livewire.user-index', ['user' => $this->user, 'person' => $this->person]);
    }
}
