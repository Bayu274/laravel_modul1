<?php

namespace App\Http\Controllers;

use App\Models\TestDriveRequest;
use Illuminate\Http\Request;

class TestDriveController extends Controller
{
    public function create()
    {
        return view('test-drive.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20'],
            'model' => ['required', 'string'],
            'preferred_date' => ['required', 'date', 'after_or_equal:today'],
        ]);

        TestDriveRequest::create([
            'user_id' => auth()->id(),
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'model' => $validated['model'],
            'preferred_date' => $validated['preferred_date'],
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Permintaan test drive Anda telah berhasil dikirim! Dealer terdekat akan menghubungi Anda.');
    }
}
