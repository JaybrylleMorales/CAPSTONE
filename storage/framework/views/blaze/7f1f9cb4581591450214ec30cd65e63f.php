<?php
if (!function_exists('__7f1f9cb4581591450214ec30cd65e63f')):
function __7f1f9cb4581591450214ec30cd65e63f($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/5c91191d0afe646947880ed18caedc93.php'); ?>
<?php if (isset($__slots5c91191d0afe646947880ed18caedc93)) { $__slotsStack5c91191d0afe646947880ed18caedc93[] = $__slots5c91191d0afe646947880ed18caedc93; } ?>
<?php if (isset($__attrs5c91191d0afe646947880ed18caedc93)) { $__attrsStack5c91191d0afe646947880ed18caedc93[] = $__attrs5c91191d0afe646947880ed18caedc93; } ?>
<?php $__attrs5c91191d0afe646947880ed18caedc93 = ['content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__slots5c91191d0afe646947880ed18caedc93 = []; ?>
<?php $__blaze->pushData($__attrs5c91191d0afe646947880ed18caedc93); ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $__slots5c91191d0afe646947880ed18caedc93['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots5c91191d0afe646947880ed18caedc93); ?>
<?php __5c91191d0afe646947880ed18caedc93($__blaze, $__attrs5c91191d0afe646947880ed18caedc93, $__slots5c91191d0afe646947880ed18caedc93, ['content', 'position', 'kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack5c91191d0afe646947880ed18caedc93)) { $__slots5c91191d0afe646947880ed18caedc93 = array_pop($__slotsStack5c91191d0afe646947880ed18caedc93); } ?>
<?php if (! empty($__attrsStack5c91191d0afe646947880ed18caedc93)) { $__attrs5c91191d0afe646947880ed18caedc93 = array_pop($__attrsStack5c91191d0afe646947880ed18caedc93); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/with-tooltip.blade.php ENDPATH**/ ?>