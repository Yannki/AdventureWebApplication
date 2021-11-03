<?php

namespace Database\Seeders;

use App\Models\Adventurer;
use Illuminate\Database\Seeder;

class AdventurerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a = new Adventurer;
        $a->name = "James";
        $a->age = 25;
        $a->rank = "Beginer";
        $a->save();

        $adventurers = Adventurer::factory()->count(10)->create();
    }
}
