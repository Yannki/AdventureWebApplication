<?php

namespace Database\Factories;

use App\Models\Commission;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commission::class;

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
            'difficulty' => $this->faker->randomElement(['easy','medium','hard','expert']),
            'reward' => $this->faker->randomNumber(7),
        ];
    }
}
