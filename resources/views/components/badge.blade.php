@props(['status' => 'pending'])

@php
    $classes = match($status) {
        'pending' => 'bg-yellow-500/15 text-yellow-400 border-yellow-500/30',
        'confirmed' => 'bg-blue-500/15 text-blue-400 border-blue-500/30',
        'processing' => 'bg-purple-500/15 text-purple-400 border-purple-500/30',
        'completed', 'delivered' => 'bg-green-500/15 text-green-400 border-green-500/30',
        'cancelled' => 'bg-red-500/15 text-red-400 border-red-500/30',
        'available' => 'bg-green-500/15 text-green-400 border-green-500/30',
        'sold' => 'bg-red-500/15 text-red-400 border-red-500/30',
        'reserved' => 'bg-yellow-500/15 text-yellow-400 border-yellow-500/30',
        default => 'bg-gray-500/15 text-gray-400 border-gray-500/30',
    };
@endphp

<span class="inline-flex items-center rounded border px-2.5 py-0.5 text-[12px] font-medium {{ $classes }}">
    {{ ucfirst($status) }}
</span>
