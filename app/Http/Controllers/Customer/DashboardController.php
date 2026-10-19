<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $recentOrders = $user->orders()->with('car')->latest()->take(5)->get();
        $recentTestDrives = $user->testDriveRequests()->latest()->take(3)->get();

        return view('customer.dashboard', compact('recentOrders', 'recentTestDrives'));
    }
}
