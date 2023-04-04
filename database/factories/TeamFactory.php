<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $teamName = [
            'дружба',
            'Кросс',
            'PSG m',
            'MANCHESTER UNITED m',
            'BARCELONA m',
            'REAL MADRID m',
        ];

        return [
            "kind_of_sport_id" => random_int(1, 8),
            "title" => $teamName[random_int(0, 5)],
            "hometown" => 'хабаровск',
        ];
    }
}
