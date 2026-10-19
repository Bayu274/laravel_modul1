@props([
    'name',
    'label' => null,
    'options' => [],
    'placeholder' => 'Pilih...',
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
    <select
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'text-input w-full' . ($hasError ? ' border-m-red' : '')]) }}
    >
        <option value="">{{ $placeholder }}</option>
        @foreach($options as $value => $labelText)
            <option value="{{ $value }}" {{ old($name) == $value ? 'selected' : '' }}>{{ $labelText }}</option>
        @endforeach
    </select>
    @error($name)
        <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
    @enderror
</div>
