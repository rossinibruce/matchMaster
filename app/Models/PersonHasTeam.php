<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonHasTeam extends Model
{
    protected $table = 'persons_has_teams';

    use HasFactory;

    protected $fillable = [
        'person_id',
        'team_id',
    ];
}
