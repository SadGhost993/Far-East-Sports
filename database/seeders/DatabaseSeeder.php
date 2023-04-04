<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Team;
use App\Models\Tournament;
use App\Models\TournamentEvent;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            KindOfSportSeeder::class,
            PlayerSeeder::class,
            TeamSeeder::class,
            TournamentSeeder::class,
            TournamentEventSeeder::class,
            DivisionSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
