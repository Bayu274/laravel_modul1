@props([
    'name',
    'label' => null,
    'placeholder' => '',
    'required' => false,
])

@php
    $hasError = $errors->has($name);
@endphp

<div>
    @if($label)
        <label for="{{ $name }}" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">
            {{ $label }}
            @if($required) <span class="text-m-red">*</span> @endif
        </label>
    @endif
    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'text-input w-full' . ($hasError ? ' border-m-red' : '')]) }}
    >{{ old($name) }}</textarea>
    @error($name)
        <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
    @enderror
</div>
