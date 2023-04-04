<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tournament>
 */
class TournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        $start = Carbon::create('2023', random_int(3,6), random_int(1, 30), random_int(8, 23), 00, 00);
        $end = New Carbon($start);
        $end->addMinute(94);

        return [
            'kind_of_sport_id' => random_int(1,8),
            'division_id' => random_int(1,5),
            'team_id' => random_int(1,10),
            'rival_id' => random_int(10, 20),
            'Location_of_the_tournament' => 'Хабаровск',
            'statistic' => fake('Ru_ru')->firstName,
            'first_referee' => fake('Ru_ru')->firstName,
            'second_referee' => fake('Ru_ru')->firstName,
            'third_referee' => fake('Ru_ru')->firstName,
            'start' => $start,
            'end' => $end,
        ];
    }
}
