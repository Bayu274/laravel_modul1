<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $query = Car::with(['categories', 'specifications', 'features']);

        if ($request->filled('category')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        $cars = $query->latest()->paginate(12)->withQueryString();
        $categories = Category::withCount('cars')->get();

        return view('cars.index', compact('cars', 'categories'));
    }

    public function show(string $slug)
    {
        $car = Car::with(['specifications' => function ($q) {
            $q->orderBy('order_column');
        }, 'features' => function ($q) {
            $q->orderBy('order_column');
        }, 'categories', 'promos' => function ($q) {
            $q->where('is_active', true)->where(function ($q) {
                $q->whereNull('expires_at')->orWhere('expires_at', '>', now());
            });
        }])->where('slug', $slug)->firstOrFail();

        $allSlugs = Car::pluck('slug')->toArray();
        $currentIndex = array_search($slug, $allSlugs);
        $prevSlug = $allSlugs[($currentIndex - 1 + count($allSlugs)) % count($allSlugs)];
        $nextSlug = $allSlugs[($currentIndex + 1) % count($allSlugs)];

        return view('cars.show', [
            'car' => $car,
            'prevCar' => Car::where('slug', $prevSlug)->select('slug', 'name')->first(),
            'nextCar' => Car::where('slug', $nextSlug)->select('slug', 'name')->first(),
        ]);
    }
}
