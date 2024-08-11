<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    use HasFactory;

    protected $fillable = [
        'logo',
        'name',
        'description',
        'user_id',
    ];

    public function persons()
    {
        return $this->belongsToMany(Person::class, 'persons_has_teams', 'team_id', 'person_id');
    }

    public function sports()
    {
        return $this->belongsToMany(Sport::class, 'teams_has_sports', 'team_id', 'sport_id')->withTimestamps();
    }
}
