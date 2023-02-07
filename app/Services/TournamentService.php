<?php

namespace App\Services;

use App\Models\Tournament as model;

class TournamentService extends CoreService
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function storeTournament($data)
    {
        return $this->startCondition()->create($data);
    }

    public function updateTournament($tournament, $data)
    {
        return tap($tournament)->update($data);
    }
}
