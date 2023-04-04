<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTournamentRequest;
use App\Http\Requests\UpdateTournamentRequest;
use App\Models\Tournament;
use App\Repositories\KindOfSportRepository;
use App\Repositories\TournamentRepository;
use App\Services\TournamentService;

class TournamentController extends Controller
{
    public function __construct(
        protected KindOfSportRepository $kindOfSportRepository,
        protected TournamentRepository $tournamentRepository,
        protected TournamentService    $tournamentService,
    )
    {
    }

    public function getDivisions($kindOfSport){
        if ($kindOfSport === "DVHL-3X3"){
            return view('page/event');
        }

        return view('page/divi', compact('kindOfSport'));
    }

    public function getDivision($kindOfSport){
        return view('page/broadcast', compact('kindOfSport'));
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
