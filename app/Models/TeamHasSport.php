<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamHasSport extends Model
{
    protected $table = 'teams_has_sports';

    use HasFactory;

    protected $fillable = [
        'team_id',
        'sport_id',
    ];
}
