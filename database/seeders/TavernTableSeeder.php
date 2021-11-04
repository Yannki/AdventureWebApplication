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
        $t = new Tavern;
        $t->name = "Gohan";
        $t->country = "Japan";
        $t->active = True;
        $t->adventurer_id = 1;
        $t->save();
    }
}
