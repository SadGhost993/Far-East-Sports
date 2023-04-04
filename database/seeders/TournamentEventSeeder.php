<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TournamentEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tournament_events')->insert([
            [
                'team_id' => 1,
                'tournament_id' => 1,
                'match_time' => '00:00:00',
                'period_time' => '00:00:00',
                'period' => 1,
                'event' => 'Начало матча',
//                'score' => '',
                'author_id' => '',
                'assistant_id' => '',
                'second_assistant_id' => '',
                'context' => '',
            ],
            [
                'team_id' => 1,
                'tournament_id' => 1,
                'match_time' => '00:02:00',
                'period_time' => '00:02:00',
                'period' => 1,
                'event' => 'гол',
//                'score' => '',
                'author_id' => 1,
                'assistant_id' => 2,
                'second_assistant_id' => '',
                'context' => '',
            ],
            [
                'team_id' => 1,
                'tournament_id' => 1,
                'match_time' => '00:03:00',
                'period_time' => '00:03:00',
                'period' => 1,
                'event' => 'гол',
//                'score' => '',
                'author_id' => 1,
                'assistant_id' => 3,
                'second_assistant_id' => 2,
                'context' => '',
            ],
            [
                'team_id' => 2,
                'tournament_id' => 1,
                'match_time' => '00:05:00',
                'period_time' => '00:05:00',
                'period' => 1,
                'event' => 'гол',
//                'score' => '',
                'author_id' => 5,
                'assistant_id' => 6,
                'second_assistant_id' => 8,
                'context' => '',
            ],
        ]);

    }
}
