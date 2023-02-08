<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTournamentEventRequest;
use App\Models\TournamentEvent;
use App\Repositories\TournamentEventRepository;
use App\Services\TournamentEventService;

class TournamentEventController extends Controller
{
    public function __construct(
        protected TournamentEventRepository $tournamentEventRepository,
        protected TournamentEventService $tournamentEventService,
    )
    {}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->tournamentEventRepository->getTournamentEvent();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTournamentEventRequest $request)
    {
        $validated = $request->validated();

        return $this->tournamentEventService->storeTournamentEvent($validated);
    }

    public function destroy(TournamentEvent $tournamentEvent)
    {
        return $tournamentEvent->delete();
    }
}
