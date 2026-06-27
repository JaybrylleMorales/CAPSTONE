<?php
if (!function_exists('_8aa5066ec3a9425fb32a89bc7ec0d469')):
function _8aa5066ec3a9425fb32a89bc7ec0d469($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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

<?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/button/index.blade.php', $__blaze->compiledPath.'/cf087ae95192dd96b76d431645b9ab4d.php'); ?>
<?php if (isset($__slotscf087ae95192dd96b76d431645b9ab4d)) { $__slotsStackcf087ae95192dd96b76d431645b9ab4d[] = $__slotscf087ae95192dd96b76d431645b9ab4d; } ?>
<?php if (isset($__attrscf087ae95192dd96b76d431645b9ab4d)) { $__attrsStackcf087ae95192dd96b76d431645b9ab4d[] = $__attrscf087ae95192dd96b76d431645b9ab4d; } ?>
<?php $__attrscf087ae95192dd96b76d431645b9ab4d = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','xData' => 'fluxInputViewable','xOn:click' => 'toggle()','xBind:dataViewableOpen' => 'open','ariaLabel' => e(__('Toggle password visibility'))]; ?>
<?php $__slotscf087ae95192dd96b76d431645b9ab4d = []; ?>
<?php $__blaze->pushData($__attrscf087ae95192dd96b76d431645b9ab4d); ?>
<?php ob_start(); ?>
    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/icon/eye-slash.blade.php', $__blaze->compiledPath.'/ee0b1e05422a699dbe588f1ac2c34275.php'); ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block']); ?>
<?php _ee0b1e05422a699dbe588f1ac2c34275($__blaze, ['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/icon/eye.blade.php', $__blaze->compiledPath.'/bc13d5671c6002119ec12f57b5b69f38.php'); ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden']); ?>
<?php _bc13d5671c6002119ec12f57b5b69f38($__blaze, ['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php $__slotscf087ae95192dd96b76d431645b9ab4d['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotscf087ae95192dd96b76d431645b9ab4d); ?>
<?php _cf087ae95192dd96b76d431645b9ab4d($__blaze, $__attrscf087ae95192dd96b76d431645b9ab4d, $__slotscf087ae95192dd96b76d431645b9ab4d, ['attributes', 'size'], ['xData' => 'x-data', 'xOn:click' => 'x-on:click', 'xBind:dataViewableOpen' => 'x-bind:data-viewable-open', 'ariaLabel' => 'aria-label'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackcf087ae95192dd96b76d431645b9ab4d)) { $__slotscf087ae95192dd96b76d431645b9ab4d = array_pop($__slotsStackcf087ae95192dd96b76d431645b9ab4d); } ?>
<?php if (! empty($__attrsStackcf087ae95192dd96b76d431645b9ab4d)) { $__attrscf087ae95192dd96b76d431645b9ab4d = array_pop($__attrsStackcf087ae95192dd96b76d431645b9ab4d); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/flux/input/viewable.blade.php ENDPATH**/ ?>