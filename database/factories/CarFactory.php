<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition(): array
    {
        $name = 'NOVARA '.fake()->unique()->bothify('??-####');

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'tagline' => fake()->sentence(),
            'subtitle' => fake()->words(3, true),
            'description' => fake()->paragraphs(3, true),
            'price' => 'Mulai Rp '.number_format(fake()->numberBetween(500, 2000), 0, ',', '.').' Juta',
            'price_numeric' => fake()->numberBetween(500000000, 2000000000),
            'image' => 'images/m'.rand(3, 6).'.jpg',
            'color' => fake()->hexColor(),
            'status' => 'available',
        ];
    }
}
