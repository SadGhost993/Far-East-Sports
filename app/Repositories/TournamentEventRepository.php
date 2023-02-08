<?php

namespace App\Repositories;

use App\Models\TournamentEvent as model;

class TournamentEventRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Model::class;
    }

    public function getTournamentEvent()
    {
        return $this->startCondition()->get();
    }
}
