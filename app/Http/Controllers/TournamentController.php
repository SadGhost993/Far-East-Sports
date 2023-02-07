<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTournamentRequest;
use App\Http\Requests\UpdateTournamentRequest;
use App\Models\Tournament;
use App\Repositories\TournamentRepository;
use App\Services\TournamentService;

class TournamentController extends Controller
{
    public function __construct(
        protected TournamentRepository $tournamentRepository,
        protected TournamentService    $tournamentService,
    )
    {
    }

    public function index()
    {
        return $this->tournamentRepository->getTournament();
    }

    public function show(Tournament $tournament)
    {
        return $tournament;
    }

    public function store(StoreTournamentRequest $request)
    {
        $validated = $request->validated();

        return $this->tournamentService->storeTournament($validated);
    }

    public function update(Tournament $tournament, UpdateTournamentRequest $request)
    {
        $validated = $request->validated();

        return $this->tournamentService->updateTournament($tournament, $validated);
    }

    public function destroy(Tournament $tournament)
    {
       return $tournament->delete();
    }
}
