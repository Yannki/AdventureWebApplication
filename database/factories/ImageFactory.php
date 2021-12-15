<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Tavern;
use App\Models\Commssion;
use App\Models\Adventurer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    { 
        $noteableType = $this->faker->randomElement([
            App\Tavern::class,
            App\Commission::class,
            App\Adventurer::class,
        ]);

        if ($noteableType === Tavern::class) {
            $noteableId = Tavern::all()->random()->id;
        } else if ($noteableType === Commission::class) {
            $noteableId = Commission::all()->random()->id;
        } else {
            $noteableId = Adventurer::all()->random()->id;
        }

        $image = $this->faker->image('public/images',400,300, null, false);
        return [
            'image_path' =>$image,
            'imageable_id' => $noteableId,
            'imageable_type' => $noteableType,
        ];
    }
}
