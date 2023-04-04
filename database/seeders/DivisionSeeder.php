<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("divisions")->insert([
            ['title' => 'conference-west'],
            ['title' => 'conference-east'],
            ['title' => 'iron-division'],
            ['title' => 'platinum-division'],
            ['title' => 'titanium-division'],
        ]);
    }
}
