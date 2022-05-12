<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'posted'=>now(),
            'name'=>$this->faker->name(),
            'detail'=>$this->faker->text(),
        ];
    }
}
