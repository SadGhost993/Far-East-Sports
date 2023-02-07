<?php

namespace App\Services;

use App\Models\Team as model;

class TeamService extends CoreService
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function storeTeam($data)
    {
        return $this->startCondition()->create($data);
    }

    public function updateTeam($team, $data)
    {
        return tap($team)->update($data);
    }
}
