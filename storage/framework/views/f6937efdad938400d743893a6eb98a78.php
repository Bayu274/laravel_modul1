<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'href' => '#',
    'active' => false,
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
    'href' => '#',
    'active' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $classes = 'text-[14px] font-normal tracking-[0.3px] text-body transition-colors duration-150 hover:text-ink';
    if ($active) {
        $classes = 'text-[14px] font-medium tracking-[0.3px] text-ink transition-colors duration-150';
    }
?>

<a href="<?php echo e($href); ?>" <?php echo e($attributes->merge(['class' => $classes])); ?>><?php echo e($slot); ?></a>
<?php /**PATH D:\Kuliah\SMT 5\Prak. Pemro\Proyek\1\laravel_modul1\resources\views/components/nav-link.blade.php ENDPATH**/ ?>