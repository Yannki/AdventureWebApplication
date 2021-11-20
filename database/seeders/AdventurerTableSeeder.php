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
        $adventurers = Adventurer::factory()->count(100)->create();
    }
}
