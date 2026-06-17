<?php
if (!function_exists('_80f7690d6a6ed1aa5bbb569823e74569')):
function _80f7690d6a6ed1aa5bbb569823e74569($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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

<?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php', $__blaze->compiledPath.'/55cb56efbc196ffa8ba3b326ba88411e.php'); ?>
<?php if (isset($__slots55cb56efbc196ffa8ba3b326ba88411e)) { $__slotsStack55cb56efbc196ffa8ba3b326ba88411e[] = $__slots55cb56efbc196ffa8ba3b326ba88411e; } ?>
<?php if (isset($__attrs55cb56efbc196ffa8ba3b326ba88411e)) { $__attrsStack55cb56efbc196ffa8ba3b326ba88411e[] = $__attrs55cb56efbc196ffa8ba3b326ba88411e; } ?>
<?php $__attrs55cb56efbc196ffa8ba3b326ba88411e = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','xData' => 'fluxInputViewable','xOn:click' => 'toggle()','xBind:dataViewableOpen' => 'open','ariaLabel' => e(__('Toggle password visibility'))]; ?>
<?php $__slots55cb56efbc196ffa8ba3b326ba88411e = []; ?>
<?php $__blaze->pushData($__attrs55cb56efbc196ffa8ba3b326ba88411e); ?>
<?php ob_start(); ?>
    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/eye-slash.blade.php', $__blaze->compiledPath.'/4cd3a3b86bf7d5ce56eb347cd7ce8798.php'); ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block']); ?>
<?php _4cd3a3b86bf7d5ce56eb347cd7ce8798($__blaze, ['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/eye.blade.php', $__blaze->compiledPath.'/40d48860d9597c278a732dcdee549e0d.php'); ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden']); ?>
<?php _40d48860d9597c278a732dcdee549e0d($__blaze, ['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php $__slots55cb56efbc196ffa8ba3b326ba88411e['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots55cb56efbc196ffa8ba3b326ba88411e); ?>
<?php _55cb56efbc196ffa8ba3b326ba88411e($__blaze, $__attrs55cb56efbc196ffa8ba3b326ba88411e, $__slots55cb56efbc196ffa8ba3b326ba88411e, ['attributes', 'size'], ['xData' => 'x-data', 'xOn:click' => 'x-on:click', 'xBind:dataViewableOpen' => 'x-bind:data-viewable-open', 'ariaLabel' => 'aria-label'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack55cb56efbc196ffa8ba3b326ba88411e)) { $__slots55cb56efbc196ffa8ba3b326ba88411e = array_pop($__slotsStack55cb56efbc196ffa8ba3b326ba88411e); } ?>
<?php if (! empty($__attrsStack55cb56efbc196ffa8ba3b326ba88411e)) { $__attrs55cb56efbc196ffa8ba3b326ba88411e = array_pop($__attrsStack55cb56efbc196ffa8ba3b326ba88411e); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/input/viewable.blade.php ENDPATH**/ ?>