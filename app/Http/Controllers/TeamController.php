<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Repositories\TeamRepository;
use App\Services\TeamService;

class TeamController extends Controller
{
    public function __construct(
        protected TeamRepository $teamRepository,
        protected TeamService $teamService,
    ){}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->teamRepository->getTeams();
    }

    public function show(Team $team)
    {
        return $team;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamRequest $request)
    {
        $validated = $request->validated();

        return $this->teamService->storeTeam($validated);
    }

    public function update(Team $team, UpdateTeamRequest $request)
    {
        $validated = $request->validated();

        return $this->teamService->updateTeam($team, $validated);
    }

    public function destroy(Team $team)
    {
        return $team->delete();
    }
}
