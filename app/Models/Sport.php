<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sport extends Model
{
    protected $table = 'sports';

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'teams_has_sports', 'team_id', 'sport_id');
    }
}
