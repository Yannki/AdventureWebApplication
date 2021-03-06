<?php

namespace Database\Factories;

use App\Models\Adventurer;
use App\Models\Tavern;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdventurerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Adventurer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $taverns = Tavern::pluck('id');
        return [
            //
            'name'=> $this->faker->firstName(),
            'age' => $this->faker->numberBetween(18,99),
            'rank'=> $this->faker->randomElement(['beginner','intermediate','expert']),
            'origin'=>$this->faker->state(),
            'tavern_id'=>$this->faker->randomElement($taverns),
        ];
    }
}
