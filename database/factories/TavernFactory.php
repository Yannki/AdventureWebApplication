<?php

namespace Database\Factories;

use App\Models\Tavern;
use Illuminate\Database\Eloquent\Factories\Factory;

class TavernFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tavern::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->realText(50,1),
            'country'=> $this->faker->country(),
            'active'=>$this->faker->boolean(), 
        ];
    }
}
