<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Feature;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureFactory extends Factory
{
    protected $model = Feature::class;

    public function definition(): array
    {
        return [
            'car_id' => Car::factory(),
            'description' => fake()->sentence(),
            'order_column' => fake()->numberBetween(1, 10),
        ];
    }
}
