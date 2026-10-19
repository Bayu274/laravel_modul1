<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TestDriveRequest;
use Illuminate\Http\Request;

class TestDriveController extends Controller
{
    public function index(Request $request)
    {
        $query = TestDriveRequest::with('user');

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $testDrives = $query->latest()->paginate(10)->withQueryString();

        return view('admin.test-drives.index', compact('testDrives'));
    }

    public function updateStatus(Request $request, TestDriveRequest $testDrive)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled',
        ]);

        $testDrive->update(['status' => $validated['status']]);

        return redirect()->back()->with('success', 'Status test drive berhasil diperbarui.');
    }
}
