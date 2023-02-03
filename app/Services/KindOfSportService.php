<?php

namespace App\Services;

use App\Models\KindOfSport as model;

class KindOfSportService extends CoreService
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function storeKindOfSport($data)
    {
        return $this->startCondition()->create($data);
    }

    public function updateKindOfSport($kindOfSport, $data)
    {
        return tap($kindOfSport)->update($data);
    }
}
