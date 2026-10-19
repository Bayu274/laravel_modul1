<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->orders()->with('car')->latest()->paginate(10);

        return view('customer.orders.index', compact('orders'));
    }
}
