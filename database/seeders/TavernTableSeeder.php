<?php

namespace Database\Seeders;

use App\Models\Tavern;
use Illuminate\Database\Seeder;

class TavernTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $taverns = Tavern::factory()->count(20)->create();
    }
}
