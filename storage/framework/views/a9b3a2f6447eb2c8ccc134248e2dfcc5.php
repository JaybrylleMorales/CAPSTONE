<?php
if (!function_exists('_a9b3a2f6447eb2c8ccc134248e2dfcc5')):
function _a9b3a2f6447eb2c8ccc134248e2dfcc5($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
$__defaults = [
    'iconVariant' => 'mini',
    'size' => null,
];
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
unset($__defaults);
?>

<?php
$attributes = $attributes->merge([
    'variant' => 'subtle',
    'class' => '-me-1',
    'square' => true,
    'size' => null,
]);
?>

<?php $__blaze->ensureRequired('C:\Users\NIKKA D. BERDIN\Herd\pathwise\resources\views/flux/button/index.blade.php', $__blaze->compiledPath.'/da8aa07eaba3305aa9e4b42877c7ed11.php'); ?>
<?php if (isset($__slotsda8aa07eaba3305aa9e4b42877c7ed11)) { $__slotsStackda8aa07eaba3305aa9e4b42877c7ed11[] = $__slotsda8aa07eaba3305aa9e4b42877c7ed11; } ?>
<?php if (isset($__attrsda8aa07eaba3305aa9e4b42877c7ed11)) { $__attrsStackda8aa07eaba3305aa9e4b42877c7ed11[] = $__attrsda8aa07eaba3305aa9e4b42877c7ed11; } ?>
<?php $__attrsda8aa07eaba3305aa9e4b42877c7ed11 = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','xData' => 'fluxInputViewable','xOn:click' => 'toggle()','xBind:dataViewableOpen' => 'open','ariaLabel' => e(__('Toggle password visibility'))]; ?>
<?php $__slotsda8aa07eaba3305aa9e4b42877c7ed11 = []; ?>
<?php $__blaze->pushData($__attrsda8aa07eaba3305aa9e4b42877c7ed11); ?>
<?php ob_start(); ?>
    <?php $__blaze->ensureRequired('C:\Users\NIKKA D. BERDIN\Herd\pathwise\resources\views/flux/icon/eye-slash.blade.php', $__blaze->compiledPath.'/74b1e7da401b5b30830c73abe1448189.php'); ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block']); ?>
<?php _74b1e7da401b5b30830c73abe1448189($__blaze, ['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php $__blaze->ensureRequired('C:\Users\NIKKA D. BERDIN\Herd\pathwise\resources\views/flux/icon/eye.blade.php', $__blaze->compiledPath.'/d8c0d76cd058b4b20ec9c8de8cbabc3e.php'); ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden']); ?>
<?php _d8c0d76cd058b4b20ec9c8de8cbabc3e($__blaze, ['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php $__slotsda8aa07eaba3305aa9e4b42877c7ed11['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsda8aa07eaba3305aa9e4b42877c7ed11); ?>
<?php _da8aa07eaba3305aa9e4b42877c7ed11($__blaze, $__attrsda8aa07eaba3305aa9e4b42877c7ed11, $__slotsda8aa07eaba3305aa9e4b42877c7ed11, ['attributes', 'size'], ['xData' => 'x-data', 'xOn:click' => 'x-on:click', 'xBind:dataViewableOpen' => 'x-bind:data-viewable-open', 'ariaLabel' => 'aria-label'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackda8aa07eaba3305aa9e4b42877c7ed11)) { $__slotsda8aa07eaba3305aa9e4b42877c7ed11 = array_pop($__slotsStackda8aa07eaba3305aa9e4b42877c7ed11); } ?>
<?php if (! empty($__attrsStackda8aa07eaba3305aa9e4b42877c7ed11)) { $__attrsda8aa07eaba3305aa9e4b42877c7ed11 = array_pop($__attrsStackda8aa07eaba3305aa9e4b42877c7ed11); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\NIKKA D. BERDIN\Herd\pathwise\resources\views/flux/input/viewable.blade.php ENDPATH**/ ?>