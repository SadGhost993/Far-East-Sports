<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKindOfSportRequest;
use App\Http\Requests\UpdateKindOfSportRequest;
use App\Models\KindOfSport;
use App\Repositories\KindOfSportRepository;
use App\Services\KindOfSportService;

class KindOfSportController extends Controller
{
    public function __construct(
        protected KindOfSportRepository $kindOfSportRepository,
        protected KindOfSportService $kindOfSportService,
    )
    {}

    public function index()
    {
        return $this->kindOfSportRepository->getKindOfSports();
    }

    public function store(StoreKindOfSportRequest $request)
    {
        $validated = $request->validated();

        return $this->kindOfSportService->storeKindOfSport($validated);
    }

    public function update(UpdateKindOfSportRequest $request, KindOfSport $kindOfSport)
    {
        $validated = $request->validated();

        return $this->kindOfSportService->updateKindOfSport($kindOfSport, $validated);
    }

    public function destroy(KindOfSport $kindOfSport)
    {
        return $kindOfSport->delete();
    }
}
