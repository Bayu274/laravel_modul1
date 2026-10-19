<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Specification;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpecificationFactory extends Factory
{
    protected $model = Specification::class;

    public function definition(): array
    {
        return [
            'car_id' => Car::factory(),
            'category' => fake()->randomElement(['Performa', 'Baterai & Pengisian', 'Dimensi & Kapasitas']),
            'label' => fake()->word(),
            'value' => fake()->sentence(3),
            'order_column' => fake()->numberBetween(1, 10),
        ];
    }
}
