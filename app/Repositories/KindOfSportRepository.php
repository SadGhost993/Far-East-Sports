<?php

namespace App\Repositories;

use App\Models\KindOfSport as model;

class KindOfSportRepository extends CoreRepository
{

    protected function getModelClass()
    {
        return Model::class;
    }

    public function getKindOfSports()
    {
        return $this->startCondition()->get();
    }
}
