<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        $paymentMethod = fake()->randomElement(['cash', 'credit', 'leasing']);
        $isCredit = in_array($paymentMethod, ['credit', 'leasing']);

        return [
            'user_id' => User::factory(),
            'car_id' => Car::factory(),
            'color' => fake()->randomElement(['#1c69d4', '#2f7be0', '#0066b1', '#e22718', '#ffffff', '#000000']),
            'payment_method' => $paymentMethod,
            'down_payment' => $isCredit ? fake()->numberBetween(100000000, 500000000) : null,
            'monthly_installment' => $isCredit ? fake()->numberBetween(5000000, 20000000) : null,
            'tenor' => $isCredit ? fake()->randomElement([12, 24, 36, 48, 60]) : null,
            'full_name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'shipping_address' => fake()->address(),
            'shipping_city' => fake()->city(),
            'shipping_province' => fake()->state(),
            'shipping_postal_code' => fake()->postcode(),
            'notes' => fake()->optional()->sentence(),
            'status' => fake()->randomElement(['pending', 'confirmed', 'processing', 'delivered', 'cancelled']),
        ];
    }

    public function forUser(User $user): static
    {
        return $this->state(fn () => [
            'user_id' => $user->id,
            'full_name' => $user->name,
            'phone' => $user->phone,
            'email' => $user->email,
            'shipping_address' => $user->address,
            'shipping_city' => $user->city,
            'shipping_province' => $user->province,
            'shipping_postal_code' => $user->postal_code,
        ]);
    }
}
