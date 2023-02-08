<?php

namespace App\Services;

use App\Models\TournamentEvent as model;

class TournamentEventService extends CoreService
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function storeTournamentEvent($data)
    {
        return $this->startCondition()->create($data);
    }
}
