<?php

namespace Database\Seeders;

use App\Models\Commission;
use App\Models\Tavern;
use Illuminate\Database\Seeder;

class CommissionTavernTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tavern = Tavern::find(1);
        $commission = Commission::all();
        $tavern->commissions()->sync($commission);

        $tavern = Tavern::find(2);
        $tavern->commissions()->sync($commission);
    }
}
