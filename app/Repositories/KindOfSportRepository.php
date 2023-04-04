<?php

namespace App\Repositories;

use App\Models\KindOfSport as model;

class KindOfSportRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Model::class;
    }

    public function getTournamentByKindOfSport($kindOfSport)
    {
        return $this->startCondition()->where('title', '=', $kindOfSport)->with('tournament.tournamentEvent')->get();
    }

    public function getKindOfSports()
    {
        return $this->startCondition()->get();
    }
}
