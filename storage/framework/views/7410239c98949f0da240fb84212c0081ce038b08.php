<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['type']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['type']); ?>
<?php foreach (array_filter((['type']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="alert-<?php echo e($type); ?>" >
    <div class="alert alert-<?php echo e($type); ?>">
        <?php echo e($slot); ?>

    </div>
</div><?php /**PATH C:\Projects\booking\resources\views/components/alert.blade.php ENDPATH**/ ?>