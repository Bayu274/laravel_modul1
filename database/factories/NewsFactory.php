<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(6, true);
        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . $this->faker->unique()->numberBetween(1000, 9999),
            'excerpt' => $this->faker->sentence(12, true),
            'content' => $this->faker->paragraphs(5, true),
            'image' => null,
            'is_published' => true,
            'is_featured' => $this->faker->boolean(20),
            'published_at' => now()->subDays($this->faker->numberBetween(0, 30)),
        ];
    }
}
