<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name',
    'label' => null,
    'type' => 'text',
    'value' => null,
    'placeholder' => '',
    'required' => false,
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
    'name',
    'label' => null,
    'type' => 'text',
    'value' => null,
    'placeholder' => '',
    'required' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $hasError = $errors->has($name);
?>

<div>
    <?php if($label): ?>
        <label for="<?php echo e($name); ?>" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">
            <?php echo e($label); ?>

            <?php if($required): ?> <span class="text-m-red">*</span> <?php endif; ?>
        </label>
    <?php endif; ?>
    <input
        type="<?php echo e($type); ?>"
        id="<?php echo e($name); ?>"
        name="<?php echo e($name); ?>"
        value="<?php echo e(old($name, $value)); ?>"
        placeholder="<?php echo e($placeholder); ?>"
        <?php echo e($required ? 'required' : ''); ?>

        <?php echo e($attributes->merge(['class' => 'text-input w-full' . ($hasError ? ' border-m-red' : '')])); ?>

    >
    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="mt-1 text-[12px] font-light text-m-red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH D:\Kuliah\SMT 5\Prak. Pemro\Proyek\1\laravel_modul1\resources\views/components/input.blade.php ENDPATH**/ ?>