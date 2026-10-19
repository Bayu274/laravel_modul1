<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\News;
use App\Models\Promo;

class HomeController extends Controller
{
    public function index()
    {
        $featuredCars = Car::with(['categories', 'specifications', 'features'])->latest()->take(4)->get();
        $latestNews = News::where('is_published', true)->latest('published_at')->take(3)->get();
        $activePromos = Promo::where('is_active', true)
            ->where(function ($q) {
                $q->whereNull('starts_at')->orWhere('starts_at', '<=', now());
            })
            ->where(function ($q) {
                $q->whereNull('expires_at')->orWhere('expires_at', '>', now());
            })
            ->take(2)->get();

        return view('welcome', compact('featuredCars', 'latestNews', 'activePromos'));
    }
}
