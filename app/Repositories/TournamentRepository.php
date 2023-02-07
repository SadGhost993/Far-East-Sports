<?php

namespace App\Repositories;

use App\Models\Tournament as model;

class TournamentRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Model::class;
    }

    public function getTournament()
    {
        return $this->startCondition()->get();
    }
}
