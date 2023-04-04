<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KindOfSportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kind_of_sports')->insert([
            ['title' => 'dvhl'],
            ['title' => 'ice box'],
            ['title' => 'volta football'],
            ['title' => 'table tennis'],
            ['title' => 'badminton'],
            ['title' => 'footvolley'],
            ['title' => 'smart hockey'],
            ['title' => 'darts'],
            ['title' => 'eSPORTS'],
            ['title' => 'kabaddi'],
        ]);
    }
}
