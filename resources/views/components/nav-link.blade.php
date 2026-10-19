@props([
    'href' => '#',
    'active' => false,
])

@php
    $classes = 'text-[14px] font-normal tracking-[0.3px] text-body transition-colors duration-150 hover:text-ink';
    if ($active) {
        $classes = 'text-[14px] font-medium tracking-[0.3px] text-ink transition-colors duration-150';
    }
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
