<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonHasSport extends Model
{
    protected $table = 'persons_has_sports';

    use HasFactory;

    protected $fillable = [
        'person_id',
        'sport_id',
    ];
}
