<?php

namespace Database\Seeders;

use App\Models\Tournament;
use App\Models\TournamentEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tournament::factory(40)
            ->has(TournamentEvent::factory(20))
            ->create();
    }
}
