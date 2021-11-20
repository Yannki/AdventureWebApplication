<?php

namespace Database\Seeders;

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
        // \App\Modefls\User::factory(10)->create();
        $this->call(TavernTableSeeder::class);
        $this->call(AdventurerTableSeeder::class); 
        $this->call(CommissionTableSeeder::class);
        $this->call(CommentTableSeeder::class);
       
        
    }
}
