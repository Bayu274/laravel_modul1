@props([
    'title',
    'value',
    'subtitle' => null,
    'color' => 'primary',
])

<div class="rounded border border-hairline bg-surface p-6">
    <p class="text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">{{ $title }}</p>
    <p class="mt-2 font-serif text-[32px] font-medium text-ink">{{ $value }}</p>
    @if($subtitle)
        <p class="mt-1 text-[13px] font-light text-muted">{{ $subtitle }}</p>
    @endif
</div>
