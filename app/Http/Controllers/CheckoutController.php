<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function create(string $slug)
    {
        $car = Car::where('slug', $slug)->firstOrFail();
        $user = auth()->user();

        return view('checkout.create', compact('car', 'user'));
    }

    public function store(Request $request, string $slug)
    {
        $car = Car::where('slug', $slug)->firstOrFail();
        $user = auth()->user();

        $validated = $request->validate([
            'color' => 'required|string',
            'payment_method' => 'required|in:cash,credit,leasing',
            'down_payment' => 'nullable|integer|min:0',
            'monthly_installment' => 'nullable|integer|min:0',
            'tenor' => 'nullable|integer|min:1',
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'shipping_address' => 'required|string',
            'shipping_city' => 'required|string|max:255',
            'shipping_province' => 'required|string|max:255',
            'shipping_postal_code' => 'required|string|max:10',
            'notes' => 'nullable|string',
        ]);

        $validated['user_id'] = $user->id;
        $validated['car_id'] = $car->id;
        $validated['status'] = 'pending';

        Order::create($validated);

        return redirect()->route('customer.orders')->with('success', 'Pesanan berhasil dibuat! Kami akan menghubungi Anda untuk konfirmasi.');
    }
}
