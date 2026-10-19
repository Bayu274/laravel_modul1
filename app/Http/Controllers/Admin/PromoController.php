<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::with('cars')->latest()->paginate(10);

        return view('admin.promos.index', compact('promos'));
    }

    public function create()
    {
        $cars = Car::pluck('name', 'id');

        return view('admin.promos.create', compact('cars'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'discount_type' => 'required|in:percentage,fixed',
            'discount_value' => 'required|numeric|min:0',
            'promo_code' => 'nullable|string|max:50|unique:promos,promo_code',
            'image' => 'nullable|string|max:255',
            'starts_at' => 'nullable|date',
            'expires_at' => 'nullable|date|after_or_equal:starts_at',
            'is_active' => 'boolean',
            'cars' => 'nullable|array',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->boolean('is_active');

        $promo = Promo::create(collect($validated)->except('cars')->toArray());

        if (! empty($validated['cars'])) {
            $promo->cars()->sync($validated['cars']);
        }

        return redirect()->route('admin.promos.index')->with('success', 'Promo berhasil ditambahkan.');
    }

    public function edit(Promo $promo)
    {
        $promo->load('cars');
        $cars = Car::pluck('name', 'id');

        return view('admin.promos.edit', compact('promo', 'cars'));
    }

    public function update(Request $request, Promo $promo)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'discount_type' => 'required|in:percentage,fixed',
            'discount_value' => 'required|numeric|min:0',
            'promo_code' => 'nullable|string|max:50|unique:promos,promo_code,'.$promo->id,
            'image' => 'nullable|string|max:255',
            'starts_at' => 'nullable|date',
            'expires_at' => 'nullable|date|after_or_equal:starts_at',
            'is_active' => 'boolean',
            'cars' => 'nullable|array',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->boolean('is_active');

        $promo->update(collect($validated)->except('cars')->toArray());
        $promo->cars()->sync($validated['cars'] ?? []);

        return redirect()->route('admin.promos.index')->with('success', 'Promo berhasil diperbarui.');
    }

    public function destroy(Promo $promo)
    {
        $promo->delete();

        return redirect()->route('admin.promos.index')->with('success', 'Promo berhasil dihapus.');
    }
}
