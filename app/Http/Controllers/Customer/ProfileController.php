<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();

        return view('customer.profile.show', compact('user'));
    }

    public function edit()
    {
        $user = auth()->user();

        return view('customer.profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'id_card_number' => 'nullable|string|max:20',
        ]);

        $user->update($validated);

        return redirect()->route('customer.profile')->with('success', 'Profil berhasil diperbarui.');
    }
}
