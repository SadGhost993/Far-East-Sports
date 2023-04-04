<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TournamentEvent>
 */
class TournamentEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tournament = DB::table('tournaments')->latest()->first();

        if (random_int(0, 1)) {
            $teamID = $tournament->team_id;
        } else {
            $teamID = $tournament->rival_id;
        }

//        $tournamentEvent = DB::table('tournament_events')
//            ->where('tournament', '=', $tournament->id)
//            ->first();

        $factory = [
            'match_time' => '',
            'period_time' => '',
            'period' => '',
            'event' => 'гол',
//            'score' => '',
            'author_id' => '',
            'assistant_id' => '',
            'second_assistant_id' => '',
            'context' => '',
        ];

        $factory['team_id'] = $teamID;

        return $factory;
    }
}
