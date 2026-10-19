<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'variant' => 'primary',
    'href' => null,
    'type' => 'button',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'variant' => 'primary',
    'href' => null,
    'type' => 'button',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $tag = $href ? 'a' : 'button';
    $baseClasses = match($variant) {
        'primary' => 'btn-primary',
        'secondary' => 'btn-secondary',
        'danger' => 'inline-flex h-12 items-center justify-center bg-red-600 px-8 text-[14px] font-bold leading-none tracking-[0.5px] text-white transition-colors duration-150 hover:bg-red-700',
        'success' => 'inline-flex h-12 items-center justify-center bg-green-600 px-8 text-[14px] font-bold leading-none tracking-[0.5px] text-white transition-colors duration-150 hover:bg-green-700',
        default => 'btn-primary',
    };
?>

<<?php echo e($tag); ?>

    <?php if($href): ?> href="<?php echo e($href); ?>" <?php else: ?> type="<?php echo e($type); ?>" <?php endif; ?>
    <?php echo e($attributes->merge(['class' => $baseClasses])); ?>

><?php echo e($slot); ?></<?php echo e($tag); ?>>
<?php /**PATH D:\Kuliah\SMT 5\Prak. Pemro\Proyek\1\laravel_modul1\resources\views/components/button.blade.php ENDPATH**/ ?>