<?php

namespace Database\Factories;

use App\Models\TestDriveRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestDriveRequestFactory extends Factory
{
    protected $model = TestDriveRequest::class;

    public function definition(): array
    {
        return [
            'user_id' => null,
            'nama' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'model' => fake()->randomElement(['NOVARA e3', 'NOVARA e5', 'NOVARA GT', 'NOVARA X']),
            'preferred_date' => fake()->dateTimeBetween('+1 week', '+1 month'),
            'status' => 'pending',
            'notes' => fake()->optional()->sentence(),
        ];
    }

    public function forUser(User $user): static
    {
        return $this->state(fn () => [
            'user_id' => $user->id,
            'nama' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
        ]);
    }
}
