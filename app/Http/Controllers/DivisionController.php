<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Http\Requests\StoreDivisionRequest;
use App\Http\Requests\UpdateDivisionRequest;
use App\Models\KindOfSport;
use App\Models\Tournament;
use Illuminate\Support\Facades\DB;

class DivisionController extends Controller
{
    public function getDivisions($kindOfSport)
    {
        if ($kindOfSport === "DVHL-3X3") {
            return view('page/event');
        }

        return view('page/divi', compact('kindOfSport'));
    }

    public function getDivision($kindOfSport, $division, Division $model)
    {
        $kindOfSportID = DB::table('kind_of_sports')
            ->where('title', '=', $kindOfSport)
            ->first('id');

        $divisionID = $model->where('title', $division)->first('id');

        $tournaments = Tournament::where(
            [
                ['kind_of_sport_id', '=', $kindOfSportID->id],
                ['division_id', '=', $divisionID->id],
            ])
            ->with(['team', 'rival', 'tournamentEvents'])
            ->get();

        foreach ($tournaments as $tournament) {
            $rival = $tournament->rival;
            $team = $tournament->team;

            foreach ($tournament->tournamentEvents as $tournamentEvent){
                if ($tournamentEvent->event == "гол"){
                    if ($team->id == $tournamentEvent->team_id){
                        $goal[$team->title][] =  1;
                    }else{
                        $goal[$rival->title][] =  1;
                    }
                }
            }

            dd($tournaments);
        }

        return view('page/broadcast', compact('kindOfSport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreDivisionRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDivisionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Division $division
     * @return \Illuminate\Http\Response
     */
    public function show(Division $division)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Division $division
     * @return \Illuminate\Http\Response
     */
    public function edit(Division $division)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateDivisionRequest $request
     * @param \App\Models\Division $division
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDivisionRequest $request, Division $division)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Division $division
     * @return \Illuminate\Http\Response
     */
    public function destroy(Division $division)
    {
        //
    }
}
