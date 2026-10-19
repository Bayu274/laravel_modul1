<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('categories')->latest()->paginate(10);

        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.cars.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:cars,slug',
            'tagline' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|string|max:255',
            'price_numeric' => 'required|integer|min:0',
            'image' => 'required|string|max:255',
            'color' => 'required|string|max:7',
            'categories' => 'required|array',
        ]);

        $car = Car::create($validated);
        $car->categories()->sync($validated['categories']);

        return redirect()->route('admin.cars.index')->with('success', 'Mobil berhasil ditambahkan.');
    }

    public function edit(Car $car)
    {
        $car->load('categories');
        $categories = Category::all();

        return view('admin.cars.edit', compact('car', 'categories'));
    }

    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:cars,slug,'.$car->id,
            'tagline' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|string|max:255',
            'price_numeric' => 'required|integer|min:0',
            'image' => 'required|string|max:255',
            'color' => 'required|string|max:7',
            'status' => 'required|in:available,sold,reserved',
            'categories' => 'required|array',
        ]);

        $car->update($validated);
        $car->categories()->sync($validated['categories']);

        return redirect()->route('admin.cars.index')->with('success', 'Mobil berhasil diperbarui.');
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('admin.cars.index')->with('success', 'Mobil berhasil dihapus.');
    }
}
