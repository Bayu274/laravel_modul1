<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Order;
use App\Models\TestDriveRequest;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCars = Car::count();
        $totalOrders = Order::count();
        $totalUsers = User::count();
        $totalTestDrives = TestDriveRequest::count();
        $totalRevenue = Order::whereIn('status', ['confirmed', 'processing', 'delivered'])->sum('car_id');
        $pendingOrders = Order::where('status', 'pending')->count();

        $recentOrders = Order::with(['user', 'car'])->latest()->take(5)->get();

        // Chart data — monthly revenue for last 12 months
        $chartLabels = [];
        $chartData = [];
        for ($i = 11; $i >= 0; $i--) {
            $date = now()->subMonths($i);
            $chartLabels[] = $date->format('M Y');
            $revenue = Order::where('orders.status', '!=', 'cancelled')
                ->whereYear('orders.created_at', $date->year)
                ->whereMonth('orders.created_at', $date->month)
                ->join('cars', 'orders.car_id', '=', 'cars.id')
                ->sum('cars.price_numeric');
            $chartData[] = round($revenue / 1000000); // in millions
        }

        return view('admin.dashboard', compact(
            'totalCars',
            'totalOrders',
            'totalUsers',
            'totalTestDrives',
            'totalRevenue',
            'pendingOrders',
            'recentOrders',
            'chartLabels',
            'chartData',
        ));
    }
}
