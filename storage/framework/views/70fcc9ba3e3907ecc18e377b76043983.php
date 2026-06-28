<?php
if (!function_exists('_70fcc9ba3e3907ecc18e377b76043983')):
function _70fcc9ba3e3907ecc18e377b76043983($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    <?php $__blaze->ensureRequired('C:\Users\NIKKA D. BERDIN\Herd\pathwise\resources\views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/0766db38cf374a929c277c5d355d19e8.php'); ?>
<?php if (isset($__slots0766db38cf374a929c277c5d355d19e8)) { $__slotsStack0766db38cf374a929c277c5d355d19e8[] = $__slots0766db38cf374a929c277c5d355d19e8; } ?>
<?php if (isset($__attrs0766db38cf374a929c277c5d355d19e8)) { $__attrsStack0766db38cf374a929c277c5d355d19e8[] = $__attrs0766db38cf374a929c277c5d355d19e8; } ?>
<?php $__attrs0766db38cf374a929c277c5d355d19e8 = ['content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__slots0766db38cf374a929c277c5d355d19e8 = []; ?>
<?php $__blaze->pushData($__attrs0766db38cf374a929c277c5d355d19e8); ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $__slots0766db38cf374a929c277c5d355d19e8['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots0766db38cf374a929c277c5d355d19e8); ?>
<?php _0766db38cf374a929c277c5d355d19e8($__blaze, $__attrs0766db38cf374a929c277c5d355d19e8, $__slots0766db38cf374a929c277c5d355d19e8, ['content', 'position', 'kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack0766db38cf374a929c277c5d355d19e8)) { $__slots0766db38cf374a929c277c5d355d19e8 = array_pop($__slotsStack0766db38cf374a929c277c5d355d19e8); } ?>
<?php if (! empty($__attrsStack0766db38cf374a929c277c5d355d19e8)) { $__attrs0766db38cf374a929c277c5d355d19e8 = array_pop($__attrsStack0766db38cf374a929c277c5d355d19e8); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\NIKKA D. BERDIN\Herd\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/with-tooltip.blade.php ENDPATH**/ ?>