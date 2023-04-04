<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'tournament_id',
        'title',
        'score',
    ];

    public function tournament(){
        return $this->belongsTo(Tournament::class);
    }
}
