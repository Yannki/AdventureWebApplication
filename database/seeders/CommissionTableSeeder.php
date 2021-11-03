<?php

namespace Database\Seeders;

use App\Models\Commission;
use Illuminate\Database\Seeder;

class CommissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $c = new Commission;
        $c->name = "Hope in the Woods";
        $c->difficulty = "easy";
        $c->reward = 100;
        $c->save();

        $commissions = Commission::factory()->count(10)->create();
    }
}
