<?php
if (!function_exists('_7cb48e370e9b7688892ddd9b25b2c3dd')):
function _7cb48e370e9b7688892ddd9b25b2c3dd($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'name',
    'descriptionTrailing',
    'description',
    'label',
    'badge',
]));
?>

<?php $descriptionTrailing = $descriptionTrailing ??= $attributes->pluck('description:trailing'); ?>

<?php
$__defaults = [
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'descriptionTrailing' => null,
    'description' => null,
    'label' => null,
    'badge' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$descriptionTrailing ??= $attributes['description-trailing'] ?? $attributes['descriptionTrailing'] ?? $__defaults['descriptionTrailing']; unset($attributes['descriptionTrailing'], $attributes['description-trailing']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
$label ??= $attributes['label'] ?? $__defaults['label']; unset($attributes['label']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
unset($__defaults);
?>

<?php if (isset($label) || isset($description)): ?>
    <?php

        $fieldAttributes = Flux::attributesAfter('field:', $attributes, []);
        $labelAttributes = Flux::attributesAfter('label:', $attributes, ['badge' => $badge]);
        $descriptionAttributes = Flux::attributesAfter('description:', $attributes, []);
        $errorAttributes = Flux::attributesAfter('error:', $attributes, ['name' => $name]);
    ?>
    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/field.blade.php', $__blaze->compiledPath.'/7597683e1e2a4ed59eeb245530c2d383.php'); ?>
<?php if (isset($__slots7597683e1e2a4ed59eeb245530c2d383)) { $__slotsStack7597683e1e2a4ed59eeb245530c2d383[] = $__slots7597683e1e2a4ed59eeb245530c2d383; } ?>
<?php if (isset($__attrs7597683e1e2a4ed59eeb245530c2d383)) { $__attrsStack7597683e1e2a4ed59eeb245530c2d383[] = $__attrs7597683e1e2a4ed59eeb245530c2d383; } ?>
<?php $__attrs7597683e1e2a4ed59eeb245530c2d383 = ['attributes' => $fieldAttributes]; ?>
<?php $__slots7597683e1e2a4ed59eeb245530c2d383 = []; ?>
<?php $__blaze->pushData($__attrs7597683e1e2a4ed59eeb245530c2d383); ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/label.blade.php', $__blaze->compiledPath.'/63a59d3a9d767043f73887818e821212.php'); ?>
<?php if (isset($__slots63a59d3a9d767043f73887818e821212)) { $__slotsStack63a59d3a9d767043f73887818e821212[] = $__slots63a59d3a9d767043f73887818e821212; } ?>
<?php if (isset($__attrs63a59d3a9d767043f73887818e821212)) { $__attrsStack63a59d3a9d767043f73887818e821212[] = $__attrs63a59d3a9d767043f73887818e821212; } ?>
<?php $__attrs63a59d3a9d767043f73887818e821212 = ['attributes' => $labelAttributes]; ?>
<?php $__slots63a59d3a9d767043f73887818e821212 = []; ?>
<?php $__blaze->pushData($__attrs63a59d3a9d767043f73887818e821212); ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $__slots63a59d3a9d767043f73887818e821212['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots63a59d3a9d767043f73887818e821212); ?>
<?php _63a59d3a9d767043f73887818e821212($__blaze, $__attrs63a59d3a9d767043f73887818e821212, $__slots63a59d3a9d767043f73887818e821212, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack63a59d3a9d767043f73887818e821212)) { $__slots63a59d3a9d767043f73887818e821212 = array_pop($__slotsStack63a59d3a9d767043f73887818e821212); } ?>
<?php if (! empty($__attrsStack63a59d3a9d767043f73887818e821212)) { $__attrs63a59d3a9d767043f73887818e821212 = array_pop($__attrsStack63a59d3a9d767043f73887818e821212); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/933f753ec33f863db841d7a16ff36f0f.php'); ?>
<?php if (isset($__slots933f753ec33f863db841d7a16ff36f0f)) { $__slotsStack933f753ec33f863db841d7a16ff36f0f[] = $__slots933f753ec33f863db841d7a16ff36f0f; } ?>
<?php if (isset($__attrs933f753ec33f863db841d7a16ff36f0f)) { $__attrsStack933f753ec33f863db841d7a16ff36f0f[] = $__attrs933f753ec33f863db841d7a16ff36f0f; } ?>
<?php $__attrs933f753ec33f863db841d7a16ff36f0f = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots933f753ec33f863db841d7a16ff36f0f = []; ?>
<?php $__blaze->pushData($__attrs933f753ec33f863db841d7a16ff36f0f); ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $__slots933f753ec33f863db841d7a16ff36f0f['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots933f753ec33f863db841d7a16ff36f0f); ?>
<?php _933f753ec33f863db841d7a16ff36f0f($__blaze, $__attrs933f753ec33f863db841d7a16ff36f0f, $__slots933f753ec33f863db841d7a16ff36f0f, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack933f753ec33f863db841d7a16ff36f0f)) { $__slots933f753ec33f863db841d7a16ff36f0f = array_pop($__slotsStack933f753ec33f863db841d7a16ff36f0f); } ?>
<?php if (! empty($__attrsStack933f753ec33f863db841d7a16ff36f0f)) { $__attrs933f753ec33f863db841d7a16ff36f0f = array_pop($__attrsStack933f753ec33f863db841d7a16ff36f0f); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        
        <?php $__getScope = fn($scope = []) => $scope; ?><?php if (isset($scope)) $__scope = $scope; ?><?php $scope = $__getScope(scope: ['attributes' => $errorAttributes->getAttributes()]); ?>
        <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/error.blade.php', $__blaze->compiledPath.'/339522376ac11990f70ee4aa45edce70.php'); ?>
<?php $__blaze->pushData(['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])]); ?>
<?php _339522376ac11990f70ee4aa45edce70($__blaze, ['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])], [], ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
        <?php if (isset($__scope)) { $scope = $__scope; unset($__scope); } ?>

        <?php if (isset($descriptionTrailing)): ?>
            <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/933f753ec33f863db841d7a16ff36f0f.php'); ?>
<?php if (isset($__slots933f753ec33f863db841d7a16ff36f0f)) { $__slotsStack933f753ec33f863db841d7a16ff36f0f[] = $__slots933f753ec33f863db841d7a16ff36f0f; } ?>
<?php if (isset($__attrs933f753ec33f863db841d7a16ff36f0f)) { $__attrsStack933f753ec33f863db841d7a16ff36f0f[] = $__attrs933f753ec33f863db841d7a16ff36f0f; } ?>
<?php $__attrs933f753ec33f863db841d7a16ff36f0f = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots933f753ec33f863db841d7a16ff36f0f = []; ?>
<?php $__blaze->pushData($__attrs933f753ec33f863db841d7a16ff36f0f); ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $__slots933f753ec33f863db841d7a16ff36f0f['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots933f753ec33f863db841d7a16ff36f0f); ?>
<?php _933f753ec33f863db841d7a16ff36f0f($__blaze, $__attrs933f753ec33f863db841d7a16ff36f0f, $__slots933f753ec33f863db841d7a16ff36f0f, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack933f753ec33f863db841d7a16ff36f0f)) { $__slots933f753ec33f863db841d7a16ff36f0f = array_pop($__slotsStack933f753ec33f863db841d7a16ff36f0f); } ?>
<?php if (! empty($__attrsStack933f753ec33f863db841d7a16ff36f0f)) { $__attrs933f753ec33f863db841d7a16ff36f0f = array_pop($__attrsStack933f753ec33f863db841d7a16ff36f0f); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slots7597683e1e2a4ed59eeb245530c2d383['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots7597683e1e2a4ed59eeb245530c2d383); ?>
<?php _7597683e1e2a4ed59eeb245530c2d383($__blaze, $__attrs7597683e1e2a4ed59eeb245530c2d383, $__slots7597683e1e2a4ed59eeb245530c2d383, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack7597683e1e2a4ed59eeb245530c2d383)) { $__slots7597683e1e2a4ed59eeb245530c2d383 = array_pop($__slotsStack7597683e1e2a4ed59eeb245530c2d383); } ?>
<?php if (! empty($__attrsStack7597683e1e2a4ed59eeb245530c2d383)) { $__attrs7597683e1e2a4ed59eeb245530c2d383 = array_pop($__attrsStack7597683e1e2a4ed59eeb245530c2d383); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php ENDPATH**/ ?>