<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPUnit\Framework\once;
use App\Models\Mf;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->sentence(),
            'model' => $this->faker->sentence(),
            'product_on' => now(),
            'image' => 'Xe' . rand(1, 3) . '.jpeg',
            'mf_id'=> Mf::pluck('id')->random(),
        ];
    }
}
