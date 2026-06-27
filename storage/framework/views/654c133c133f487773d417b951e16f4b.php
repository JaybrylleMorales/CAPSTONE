<?php
if (!function_exists('_654c133c133f487773d417b951e16f4b')):
function _654c133c133f487773d417b951e16f4b($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
$__defaults = [
    'name' => null,
    'variant' => null,
    'size' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
unset($__defaults);
?>

<?php
// We only want to show the name attribute on the checkbox if it has been set
// manually, but not if it has been set from the wire:model attribute...
$showName = isset($name);

if (! isset($name)) {
    $name = $attributes->whereStartsWith('wire:model')->first();
}

$classes = Flux::classes()
    ->add('block flex p-1')
    ->add('rounded-lg bg-zinc-800/5 dark:bg-white/10')
    ->add($size === 'sm' ? 'h-8 py-[3px] px-[3px]' : 'h-10 p-1')
    ->add($size === 'sm' ? '-my-px h-[calc(2rem+2px)]' : '')
    ;
?>

<?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/7cb48e370e9b7688892ddd9b25b2c3dd.php'); ?>
<?php if (isset($__slots7cb48e370e9b7688892ddd9b25b2c3dd)) { $__slotsStack7cb48e370e9b7688892ddd9b25b2c3dd[] = $__slots7cb48e370e9b7688892ddd9b25b2c3dd; } ?>
<?php if (isset($__attrs7cb48e370e9b7688892ddd9b25b2c3dd)) { $__attrsStack7cb48e370e9b7688892ddd9b25b2c3dd[] = $__attrs7cb48e370e9b7688892ddd9b25b2c3dd; } ?>
<?php $__attrs7cb48e370e9b7688892ddd9b25b2c3dd = ['attributes' => $attributes]; ?>
<?php $__slots7cb48e370e9b7688892ddd9b25b2c3dd = []; ?>
<?php $__blaze->pushData($__attrs7cb48e370e9b7688892ddd9b25b2c3dd); ?>
<?php ob_start(); ?>
    <ui-radio-group <?php echo e($attributes->class($classes)); ?> <?php if($showName): ?> name="<?php echo e($name); ?>" <?php endif; ?> data-flux-radio-group-segmented>
        <?php echo e($slot); ?>

    </ui-radio-group>
<?php $__slots7cb48e370e9b7688892ddd9b25b2c3dd['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots7cb48e370e9b7688892ddd9b25b2c3dd); ?>
<?php _7cb48e370e9b7688892ddd9b25b2c3dd($__blaze, $__attrs7cb48e370e9b7688892ddd9b25b2c3dd, $__slots7cb48e370e9b7688892ddd9b25b2c3dd, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack7cb48e370e9b7688892ddd9b25b2c3dd)) { $__slots7cb48e370e9b7688892ddd9b25b2c3dd = array_pop($__slotsStack7cb48e370e9b7688892ddd9b25b2c3dd); } ?>
<?php if (! empty($__attrsStack7cb48e370e9b7688892ddd9b25b2c3dd)) { $__attrs7cb48e370e9b7688892ddd9b25b2c3dd = array_pop($__attrsStack7cb48e370e9b7688892ddd9b25b2c3dd); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\admin\pathwise\resources\views/flux/radio/group/variants/segmented.blade.php ENDPATH**/ ?>