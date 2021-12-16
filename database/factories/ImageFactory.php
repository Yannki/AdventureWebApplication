<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Tavern;
use App\Models\Commission;
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
            'App\Models\Tavern',
            'App\Models\Commission',
            'App\Models\Adventurer',
        ]);

        if ($noteableType === 'App\Models\Tavern') {
            $noteableId = Tavern::all()->random()->id;
            $image = $this->faker->image('public/images',400,300, 'logo',false);
        } else if ($noteableType === 'App\Models\Commission') {
            $noteableId = Commission::all()->random()->id;
            $image = $this->faker->image('public/images',400,300, 'monster',false);
        } else {
            $noteableId = Adventurer::all()->random()->id;
            $image = $this->faker->image('public/images',400,300, 'profile',false);
        }

        
        return [
            'image_path' =>$image,
            'imageable_id' => $noteableId,
            'imageable_type' => $noteableType,
        ];
    }
}
