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
            'App\Tavern',
            'App\Commission',
            'App\Adventurer',
        ]);

        if ($noteableType === 'App\Tavern') {
            $noteableId = Tavern::all()->random()->id;
            $image = $this->faker->image('public/images',400,300, 'logo',true, true, 'Faker');
        } else if ($noteableType === 'App\Commission') {
            $noteableId = Commission::all()->random()->id;
            $image = $this->faker->image('public/images',400,300, 'monster',true, true, 'Faker');
        } else {
            $noteableId = Adventurer::all()->random()->id;
            $image = $this->faker->image('public/images',400,300, 'profile',true, true, 'Faker');
        }

        
        return [
            'image_path' =>$image,
            'imageable_id' => $noteableId,
            'imageable_type' => $noteableType,
        ];
    }
}
