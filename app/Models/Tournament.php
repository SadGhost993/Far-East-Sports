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

    public function division(){
        return $this->belongsTo(Division::class);
    }

    public function kindOfSport(){
        return $this->belongsTo(KindOfSport::class);
    }

    public function tournamentEvents(){
        return $this->hasMany(TournamentEvent::class);
    }

    public function team(){
        return $this->belongsTo(Team::class);
    }

    public function rival(){
        return $this->belongsTo(Team::class, 'rival_id');
    }
}
