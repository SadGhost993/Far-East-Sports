<?php

namespace App\Repositories;

use App\Models\Team as model;

class TeamRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Model::class;
    }

    public function getTeams()
    {
        return $this->startCondition()->get();
    }
}
