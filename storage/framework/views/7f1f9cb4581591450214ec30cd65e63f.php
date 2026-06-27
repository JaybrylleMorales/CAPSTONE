<?php
if (!function_exists('_7f1f9cb4581591450214ec30cd65e63f')):
function _7f1f9cb4581591450214ec30cd65e63f($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
extract(Flux::forwardedAttributes($attributes, [
    'tooltipPosition',
    'tooltipKbd',
    'tooltip',
]));
?>

<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'top',
    'tooltipKbd' => null,
    'tooltip' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
unset($__defaults);
?>

<?php if ($tooltip): ?>
    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/48c8c797f4bd97d416d1793746e08c88.php'); ?>
<?php if (isset($__slots48c8c797f4bd97d416d1793746e08c88)) { $__slotsStack48c8c797f4bd97d416d1793746e08c88[] = $__slots48c8c797f4bd97d416d1793746e08c88; } ?>
<?php if (isset($__attrs48c8c797f4bd97d416d1793746e08c88)) { $__attrsStack48c8c797f4bd97d416d1793746e08c88[] = $__attrs48c8c797f4bd97d416d1793746e08c88; } ?>
<?php $__attrs48c8c797f4bd97d416d1793746e08c88 = ['content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__slots48c8c797f4bd97d416d1793746e08c88 = []; ?>
<?php $__blaze->pushData($__attrs48c8c797f4bd97d416d1793746e08c88); ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $__slots48c8c797f4bd97d416d1793746e08c88['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots48c8c797f4bd97d416d1793746e08c88); ?>
<?php _48c8c797f4bd97d416d1793746e08c88($__blaze, $__attrs48c8c797f4bd97d416d1793746e08c88, $__slots48c8c797f4bd97d416d1793746e08c88, ['content', 'position', 'kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack48c8c797f4bd97d416d1793746e08c88)) { $__slots48c8c797f4bd97d416d1793746e08c88 = array_pop($__slotsStack48c8c797f4bd97d416d1793746e08c88); } ?>
<?php if (! empty($__attrsStack48c8c797f4bd97d416d1793746e08c88)) { $__attrs48c8c797f4bd97d416d1793746e08c88 = array_pop($__attrsStack48c8c797f4bd97d416d1793746e08c88); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/with-tooltip.blade.php ENDPATH**/ ?>