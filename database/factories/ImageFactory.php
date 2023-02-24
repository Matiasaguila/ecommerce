<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return array(

                'image' => 'subcategories/' . $this->faker->picsum(storage_path('app/public/products'), 640, 480, null, false)

        );
    }
}
