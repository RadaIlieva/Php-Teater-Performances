<?php
// database/seeders/TheaterSeed.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Teaterperformances;

class TheaterSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teaterperformances = Teaterperformances::all();

        foreach ($teaterperformances as $performance) {
            DB::table('teaterperformances')->insert([
                'name' => $performance->name,
                'date' => $performance->date,
                'venue' => $performance->venue,
                'image' => $performance->image,
                'additional_info' => $performance->additional_info,
                'bilety' => $performance->bilety,
            ]);
        }
    }
}
