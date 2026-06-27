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
    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/field.blade.php', $__blaze->compiledPath.'/b07e916ad9932c8e4739c7917131e1ef.php'); ?>
<?php if (isset($__slotsb07e916ad9932c8e4739c7917131e1ef)) { $__slotsStackb07e916ad9932c8e4739c7917131e1ef[] = $__slotsb07e916ad9932c8e4739c7917131e1ef; } ?>
<?php if (isset($__attrsb07e916ad9932c8e4739c7917131e1ef)) { $__attrsStackb07e916ad9932c8e4739c7917131e1ef[] = $__attrsb07e916ad9932c8e4739c7917131e1ef; } ?>
<?php $__attrsb07e916ad9932c8e4739c7917131e1ef = ['attributes' => $fieldAttributes]; ?>
<?php $__slotsb07e916ad9932c8e4739c7917131e1ef = []; ?>
<?php $__blaze->pushData($__attrsb07e916ad9932c8e4739c7917131e1ef); ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/label.blade.php', $__blaze->compiledPath.'/e1b0b1964892afebb6bed9cb4e0c9fc9.php'); ?>
<?php if (isset($__slotse1b0b1964892afebb6bed9cb4e0c9fc9)) { $__slotsStacke1b0b1964892afebb6bed9cb4e0c9fc9[] = $__slotse1b0b1964892afebb6bed9cb4e0c9fc9; } ?>
<?php if (isset($__attrse1b0b1964892afebb6bed9cb4e0c9fc9)) { $__attrsStacke1b0b1964892afebb6bed9cb4e0c9fc9[] = $__attrse1b0b1964892afebb6bed9cb4e0c9fc9; } ?>
<?php $__attrse1b0b1964892afebb6bed9cb4e0c9fc9 = ['attributes' => $labelAttributes]; ?>
<?php $__slotse1b0b1964892afebb6bed9cb4e0c9fc9 = []; ?>
<?php $__blaze->pushData($__attrse1b0b1964892afebb6bed9cb4e0c9fc9); ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $__slotse1b0b1964892afebb6bed9cb4e0c9fc9['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotse1b0b1964892afebb6bed9cb4e0c9fc9); ?>
<?php _e1b0b1964892afebb6bed9cb4e0c9fc9($__blaze, $__attrse1b0b1964892afebb6bed9cb4e0c9fc9, $__slotse1b0b1964892afebb6bed9cb4e0c9fc9, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStacke1b0b1964892afebb6bed9cb4e0c9fc9)) { $__slotse1b0b1964892afebb6bed9cb4e0c9fc9 = array_pop($__slotsStacke1b0b1964892afebb6bed9cb4e0c9fc9); } ?>
<?php if (! empty($__attrsStacke1b0b1964892afebb6bed9cb4e0c9fc9)) { $__attrse1b0b1964892afebb6bed9cb4e0c9fc9 = array_pop($__attrsStacke1b0b1964892afebb6bed9cb4e0c9fc9); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/description.blade.php', $__blaze->compiledPath.'/b95bdc9dc900994c4692741872fbb518.php'); ?>
<?php if (isset($__slotsb95bdc9dc900994c4692741872fbb518)) { $__slotsStackb95bdc9dc900994c4692741872fbb518[] = $__slotsb95bdc9dc900994c4692741872fbb518; } ?>
<?php if (isset($__attrsb95bdc9dc900994c4692741872fbb518)) { $__attrsStackb95bdc9dc900994c4692741872fbb518[] = $__attrsb95bdc9dc900994c4692741872fbb518; } ?>
<?php $__attrsb95bdc9dc900994c4692741872fbb518 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slotsb95bdc9dc900994c4692741872fbb518 = []; ?>
<?php $__blaze->pushData($__attrsb95bdc9dc900994c4692741872fbb518); ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $__slotsb95bdc9dc900994c4692741872fbb518['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsb95bdc9dc900994c4692741872fbb518); ?>
<?php _b95bdc9dc900994c4692741872fbb518($__blaze, $__attrsb95bdc9dc900994c4692741872fbb518, $__slotsb95bdc9dc900994c4692741872fbb518, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackb95bdc9dc900994c4692741872fbb518)) { $__slotsb95bdc9dc900994c4692741872fbb518 = array_pop($__slotsStackb95bdc9dc900994c4692741872fbb518); } ?>
<?php if (! empty($__attrsStackb95bdc9dc900994c4692741872fbb518)) { $__attrsb95bdc9dc900994c4692741872fbb518 = array_pop($__attrsStackb95bdc9dc900994c4692741872fbb518); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        
        <?php $__getScope = fn($scope = []) => $scope; ?><?php if (isset($scope)) $__scope = $scope; ?><?php $scope = $__getScope(scope: ['attributes' => $errorAttributes->getAttributes()]); ?>
        <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/error.blade.php', $__blaze->compiledPath.'/92e9f96568574e1b8296f69a9a3b7888.php'); ?>
<?php $__blaze->pushData(['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])]); ?>
<?php _92e9f96568574e1b8296f69a9a3b7888($__blaze, ['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])], [], ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
        <?php if (isset($__scope)) { $scope = $__scope; unset($__scope); } ?>

        <?php if (isset($descriptionTrailing)): ?>
            <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/description.blade.php', $__blaze->compiledPath.'/b95bdc9dc900994c4692741872fbb518.php'); ?>
<?php if (isset($__slotsb95bdc9dc900994c4692741872fbb518)) { $__slotsStackb95bdc9dc900994c4692741872fbb518[] = $__slotsb95bdc9dc900994c4692741872fbb518; } ?>
<?php if (isset($__attrsb95bdc9dc900994c4692741872fbb518)) { $__attrsStackb95bdc9dc900994c4692741872fbb518[] = $__attrsb95bdc9dc900994c4692741872fbb518; } ?>
<?php $__attrsb95bdc9dc900994c4692741872fbb518 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slotsb95bdc9dc900994c4692741872fbb518 = []; ?>
<?php $__blaze->pushData($__attrsb95bdc9dc900994c4692741872fbb518); ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $__slotsb95bdc9dc900994c4692741872fbb518['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsb95bdc9dc900994c4692741872fbb518); ?>
<?php _b95bdc9dc900994c4692741872fbb518($__blaze, $__attrsb95bdc9dc900994c4692741872fbb518, $__slotsb95bdc9dc900994c4692741872fbb518, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackb95bdc9dc900994c4692741872fbb518)) { $__slotsb95bdc9dc900994c4692741872fbb518 = array_pop($__slotsStackb95bdc9dc900994c4692741872fbb518); } ?>
<?php if (! empty($__attrsStackb95bdc9dc900994c4692741872fbb518)) { $__attrsb95bdc9dc900994c4692741872fbb518 = array_pop($__attrsStackb95bdc9dc900994c4692741872fbb518); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slotsb07e916ad9932c8e4739c7917131e1ef['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsb07e916ad9932c8e4739c7917131e1ef); ?>
<?php _b07e916ad9932c8e4739c7917131e1ef($__blaze, $__attrsb07e916ad9932c8e4739c7917131e1ef, $__slotsb07e916ad9932c8e4739c7917131e1ef, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackb07e916ad9932c8e4739c7917131e1ef)) { $__slotsb07e916ad9932c8e4739c7917131e1ef = array_pop($__slotsStackb07e916ad9932c8e4739c7917131e1ef); } ?>
<?php if (! empty($__attrsStackb07e916ad9932c8e4739c7917131e1ef)) { $__attrsb07e916ad9932c8e4739c7917131e1ef = array_pop($__attrsStackb07e916ad9932c8e4739c7917131e1ef); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php ENDPATH**/ ?>