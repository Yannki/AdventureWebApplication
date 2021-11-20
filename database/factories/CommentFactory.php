<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Adventurer;
use App\Models\Commission;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $adventurers = Adventurer::pluck('id');
        $commissions = Commission::pluck('id');
        return [
            'text' => $this->faker->realText(50,1),
            'adventurer_id'=>$this->faker->randomElement($adventurers),
            'commission_id'=>$this->faker->randomElement($commissions),
        ];
    }
}
