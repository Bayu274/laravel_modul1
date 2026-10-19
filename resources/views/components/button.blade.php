@props([
    'variant' => 'primary',
    'href' => null,
    'type' => 'button',
])

@php
    $tag = $href ? 'a' : 'button';
    $baseClasses = match($variant) {
        'primary' => 'btn-primary',
        'secondary' => 'btn-secondary',
        'danger' => 'inline-flex h-12 items-center justify-center bg-red-600 px-8 text-[14px] font-bold leading-none tracking-[0.5px] text-white transition-colors duration-150 hover:bg-red-700',
        'success' => 'inline-flex h-12 items-center justify-center bg-green-600 px-8 text-[14px] font-bold leading-none tracking-[0.5px] text-white transition-colors duration-150 hover:bg-green-700',
        default => 'btn-primary',
    };
@endphp

<{{ $tag }}
    @if($href) href="{{ $href }}" @else type="{{ $type }}" @endif
    {{ $attributes->merge(['class' => $baseClasses]) }}
>{{ $slot }}</{{ $tag }}>
