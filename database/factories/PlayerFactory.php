<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "avatar" => '',
            "team_id" => random_int(1, 6),
            "player_number" => random_int(1, 100),
            "element" => random_int(1, 7),
            "name" => fake('RU_ru')->firstName,
            "last_name" => fake('RU_ru')->lastName,
            "birthday" => Carbon::now(),
            "Role" => random_int(1, 3),
        ];
    }
}
