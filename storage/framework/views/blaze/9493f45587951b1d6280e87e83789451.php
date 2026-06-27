<?php
if (!function_exists('__9493f45587951b1d6280e87e83789451')):
function __9493f45587951b1d6280e87e83789451($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php $iconTrailing ??= $attributes->pluck('icon:trailing'); ?>
<?php $iconVariant ??= $attributes->pluck('icon:variant'); ?>

<?php
$__defaults = [
    'iconTrailing' => null,
    'iconVariant' => 'mini',
    'variant' => 'default',
    'suffix' => null,
    'value' => null,
    'icon' => null,
    'kbd' => null,
];
$iconTrailing ??= $attributes['icon-trailing'] ?? $attributes['iconTrailing'] ?? $__defaults['iconTrailing']; unset($attributes['iconTrailing'], $attributes['icon-trailing']);
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
$suffix ??= $attributes['suffix'] ?? $__defaults['suffix']; unset($attributes['suffix']);
$value ??= $attributes['value'] ?? $__defaults['value']; unset($attributes['value']);
$icon ??= $attributes['icon'] ?? $__defaults['icon']; unset($attributes['icon']);
$kbd ??= $attributes['kbd'] ?? $__defaults['kbd']; unset($attributes['kbd']);
unset($__defaults);
?>

<?php
if ($kbd) $suffix = $kbd;

$iconClasses = Flux::classes()
    ->add('me-2')
    // When using the outline icon variant, we need to size it down to match the default icon sizes...
    ->add($iconVariant === 'outline' ? 'size-5' : null)
    ;

$trailingIconClasses = Flux::classes()
    ->add('ms-auto text-zinc-400 [[data-flux-menu-item-icon]:hover_&]:text-current')
    // When using the outline icon variant, we need to size it down to match the default icon sizes...
    ->add($iconVariant === 'outline' ? 'size-5' : null)
    ;

$classes = Flux::classes()
    ->add('flex items-center px-2 py-1.5 w-full focus:outline-hidden')
    ->add('rounded-md')
    ->add('text-start text-sm font-medium')
    ->add('[&[disabled]]:opacity-50')
    ->add(match ($variant) {
        'danger' => [
            'text-zinc-800 data-active:text-red-600 data-active:bg-red-50 dark:text-white dark:data-active:bg-red-400/20 dark:data-active:text-red-400',
            '**:data-flux-menu-item-icon:text-zinc-400 dark:**:data-flux-menu-item-icon:text-white/60 [&[data-active]_[data-flux-menu-item-icon]]:text-current',
        ],
        'default' => [
            'text-zinc-800 data-active:bg-zinc-50 dark:text-white dark:data-active:bg-zinc-600',
            '**:data-flux-menu-item-icon:text-zinc-400 dark:**:data-flux-menu-item-icon:text-white/60 [&[data-active]_[data-flux-menu-item-icon]]:text-current',
        ]
    })
    ;

$suffixClasses = Flux::classes()
    ->add('ms-auto text-xs text-zinc-400')
    ;
?>

<?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/button-or-link-pure.blade.php', $__blaze->compiledPath.'/a9d1b484db698dc272034b7ac6342f8a.php'); ?>
<?php if (isset($__slotsa9d1b484db698dc272034b7ac6342f8a)) { $__slotsStacka9d1b484db698dc272034b7ac6342f8a[] = $__slotsa9d1b484db698dc272034b7ac6342f8a; } ?>
<?php if (isset($__attrsa9d1b484db698dc272034b7ac6342f8a)) { $__attrsStacka9d1b484db698dc272034b7ac6342f8a[] = $__attrsa9d1b484db698dc272034b7ac6342f8a; } ?>
<?php $__attrsa9d1b484db698dc272034b7ac6342f8a = ['attributes' => $attributes->class($classes),'dataFluxMenuItem' => true,'dataFluxMenuItemHasIcon' => !! $icon]; ?>
<?php $__slotsa9d1b484db698dc272034b7ac6342f8a = []; ?>
<?php $__blaze->pushData($__attrsa9d1b484db698dc272034b7ac6342f8a); ?>
<?php ob_start(); ?>
    <?php if (is_string($icon) && $icon !== ''): ?>
        <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/icon/index.blade.php', $__blaze->compiledPath.'/d361e5aaf0ae80c8768d2df9cf31ab64.php'); ?>
<?php $__blaze->pushData(['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses,'dataFluxMenuItemIcon' => true]); ?>
<?php __d361e5aaf0ae80c8768d2df9cf31ab64($__blaze, ['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses,'dataFluxMenuItemIcon' => true], [], ['icon', 'variant', 'class', 'dataFluxMenuItemIcon'], ['dataFluxMenuItemIcon' => 'data-flux-menu-item-icon'], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php elseif ($icon): ?>
        <?php echo e($icon); ?>

    <?php else: ?>
        <div class="w-7 hidden [[data-flux-menu]:has(>[data-flux-menu-item-has-icon])_&]:block"></div>
    <?php endif; ?>

    <?php echo e($slot); ?>


    <?php if ($suffix): ?>
        <?php if (is_string($suffix)): ?>
            <div class="<?php echo e($suffixClasses); ?>">
                <?php echo e($suffix); ?>

            </div>
        <?php else: ?>
            <?php echo e($suffix); ?>

        <?php endif; ?>
    <?php endif; ?>

    <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
        <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/icon/index.blade.php', $__blaze->compiledPath.'/d361e5aaf0ae80c8768d2df9cf31ab64.php'); ?>
<?php $__blaze->pushData(['icon' => $iconTrailing,'variant' => $iconVariant,'class' => $trailingIconClasses,'dataFluxMenuItemIcon' => true]); ?>
<?php __d361e5aaf0ae80c8768d2df9cf31ab64($__blaze, ['icon' => $iconTrailing,'variant' => $iconVariant,'class' => $trailingIconClasses,'dataFluxMenuItemIcon' => true], [], ['icon', 'variant', 'class', 'dataFluxMenuItemIcon'], ['dataFluxMenuItemIcon' => 'data-flux-menu-item-icon'], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php elseif ($iconTrailing): ?>
        <?php echo e($iconTrailing); ?>

    <?php endif; ?>

    <?php echo e($submenu ?? ''); ?>

<?php $__slotsa9d1b484db698dc272034b7ac6342f8a['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotsa9d1b484db698dc272034b7ac6342f8a); ?>
<?php __a9d1b484db698dc272034b7ac6342f8a($__blaze, $__attrsa9d1b484db698dc272034b7ac6342f8a, $__slotsa9d1b484db698dc272034b7ac6342f8a, ['attributes', 'dataFluxMenuItem', 'dataFluxMenuItemHasIcon'], ['dataFluxMenuItem' => 'data-flux-menu-item', 'dataFluxMenuItemHasIcon' => 'data-flux-menu-item-has-icon'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStacka9d1b484db698dc272034b7ac6342f8a)) { $__slotsa9d1b484db698dc272034b7ac6342f8a = array_pop($__slotsStacka9d1b484db698dc272034b7ac6342f8a); } ?>
<?php if (! empty($__attrsStacka9d1b484db698dc272034b7ac6342f8a)) { $__attrsa9d1b484db698dc272034b7ac6342f8a = array_pop($__attrsStacka9d1b484db698dc272034b7ac6342f8a); } ?>
<?php $__blaze->popData(); ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/flux/menu/item.blade.php ENDPATH**/ ?>