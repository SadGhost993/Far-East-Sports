<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'kind_of_sport_id',
        'team_id',
        'rival_id',
        'start',
        'end',
    ];
}
