<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mf_name' => $this->faker->sentence(),
        ];
    }
}
