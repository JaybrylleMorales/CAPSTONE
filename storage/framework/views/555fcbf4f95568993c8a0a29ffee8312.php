<?php
if (!function_exists('_555fcbf4f95568993c8a0a29ffee8312')):
function _555fcbf4f95568993c8a0a29ffee8312($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    <?php $__blaze->ensureRequired('C:\Users\NIKKA D. BERDIN\Herd\pathwise\resources\views/flux/field.blade.php', $__blaze->compiledPath.'/56f83a515a35f4407948289a825af070.php'); ?>
<?php if (isset($__slots56f83a515a35f4407948289a825af070)) { $__slotsStack56f83a515a35f4407948289a825af070[] = $__slots56f83a515a35f4407948289a825af070; } ?>
<?php if (isset($__attrs56f83a515a35f4407948289a825af070)) { $__attrsStack56f83a515a35f4407948289a825af070[] = $__attrs56f83a515a35f4407948289a825af070; } ?>
<?php $__attrs56f83a515a35f4407948289a825af070 = ['attributes' => $fieldAttributes]; ?>
<?php $__slots56f83a515a35f4407948289a825af070 = []; ?>
<?php $__blaze->pushData($__attrs56f83a515a35f4407948289a825af070); ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php $__blaze->ensureRequired('C:\Users\NIKKA D. BERDIN\Herd\pathwise\resources\views/flux/label.blade.php', $__blaze->compiledPath.'/a090b7da45ad1a7386627f6fea8ef90c.php'); ?>
<?php if (isset($__slotsa090b7da45ad1a7386627f6fea8ef90c)) { $__slotsStacka090b7da45ad1a7386627f6fea8ef90c[] = $__slotsa090b7da45ad1a7386627f6fea8ef90c; } ?>
<?php if (isset($__attrsa090b7da45ad1a7386627f6fea8ef90c)) { $__attrsStacka090b7da45ad1a7386627f6fea8ef90c[] = $__attrsa090b7da45ad1a7386627f6fea8ef90c; } ?>
<?php $__attrsa090b7da45ad1a7386627f6fea8ef90c = ['attributes' => $labelAttributes]; ?>
<?php $__slotsa090b7da45ad1a7386627f6fea8ef90c = []; ?>
<?php $__blaze->pushData($__attrsa090b7da45ad1a7386627f6fea8ef90c); ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $__slotsa090b7da45ad1a7386627f6fea8ef90c['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsa090b7da45ad1a7386627f6fea8ef90c); ?>
<?php _a090b7da45ad1a7386627f6fea8ef90c($__blaze, $__attrsa090b7da45ad1a7386627f6fea8ef90c, $__slotsa090b7da45ad1a7386627f6fea8ef90c, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStacka090b7da45ad1a7386627f6fea8ef90c)) { $__slotsa090b7da45ad1a7386627f6fea8ef90c = array_pop($__slotsStacka090b7da45ad1a7386627f6fea8ef90c); } ?>
<?php if (! empty($__attrsStacka090b7da45ad1a7386627f6fea8ef90c)) { $__attrsa090b7da45ad1a7386627f6fea8ef90c = array_pop($__attrsStacka090b7da45ad1a7386627f6fea8ef90c); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php $__blaze->ensureRequired('C:\Users\NIKKA D. BERDIN\Herd\pathwise\resources\views/flux/description.blade.php', $__blaze->compiledPath.'/d5e11fd5775de7a2120ed7812469ca7a.php'); ?>
<?php if (isset($__slotsd5e11fd5775de7a2120ed7812469ca7a)) { $__slotsStackd5e11fd5775de7a2120ed7812469ca7a[] = $__slotsd5e11fd5775de7a2120ed7812469ca7a; } ?>
<?php if (isset($__attrsd5e11fd5775de7a2120ed7812469ca7a)) { $__attrsStackd5e11fd5775de7a2120ed7812469ca7a[] = $__attrsd5e11fd5775de7a2120ed7812469ca7a; } ?>
<?php $__attrsd5e11fd5775de7a2120ed7812469ca7a = ['attributes' => $descriptionAttributes]; ?>
<?php $__slotsd5e11fd5775de7a2120ed7812469ca7a = []; ?>
<?php $__blaze->pushData($__attrsd5e11fd5775de7a2120ed7812469ca7a); ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $__slotsd5e11fd5775de7a2120ed7812469ca7a['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsd5e11fd5775de7a2120ed7812469ca7a); ?>
<?php _d5e11fd5775de7a2120ed7812469ca7a($__blaze, $__attrsd5e11fd5775de7a2120ed7812469ca7a, $__slotsd5e11fd5775de7a2120ed7812469ca7a, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackd5e11fd5775de7a2120ed7812469ca7a)) { $__slotsd5e11fd5775de7a2120ed7812469ca7a = array_pop($__slotsStackd5e11fd5775de7a2120ed7812469ca7a); } ?>
<?php if (! empty($__attrsStackd5e11fd5775de7a2120ed7812469ca7a)) { $__attrsd5e11fd5775de7a2120ed7812469ca7a = array_pop($__attrsStackd5e11fd5775de7a2120ed7812469ca7a); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        
        <?php $__getScope = fn($scope = []) => $scope; ?><?php if (isset($scope)) $__scope = $scope; ?><?php $scope = $__getScope(scope: ['attributes' => $errorAttributes->getAttributes()]); ?>
        <?php $__blaze->ensureRequired('C:\Users\NIKKA D. BERDIN\Herd\pathwise\resources\views/flux/error.blade.php', $__blaze->compiledPath.'/e0ebcac5a789e8c0f52d17639f8156c8.php'); ?>
<?php $__blaze->pushData(['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])]); ?>
<?php _e0ebcac5a789e8c0f52d17639f8156c8($__blaze, ['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])], [], ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
        <?php if (isset($__scope)) { $scope = $__scope; unset($__scope); } ?>

        <?php if (isset($descriptionTrailing)): ?>
            <?php $__blaze->ensureRequired('C:\Users\NIKKA D. BERDIN\Herd\pathwise\resources\views/flux/description.blade.php', $__blaze->compiledPath.'/d5e11fd5775de7a2120ed7812469ca7a.php'); ?>
<?php if (isset($__slotsd5e11fd5775de7a2120ed7812469ca7a)) { $__slotsStackd5e11fd5775de7a2120ed7812469ca7a[] = $__slotsd5e11fd5775de7a2120ed7812469ca7a; } ?>
<?php if (isset($__attrsd5e11fd5775de7a2120ed7812469ca7a)) { $__attrsStackd5e11fd5775de7a2120ed7812469ca7a[] = $__attrsd5e11fd5775de7a2120ed7812469ca7a; } ?>
<?php $__attrsd5e11fd5775de7a2120ed7812469ca7a = ['attributes' => $descriptionAttributes]; ?>
<?php $__slotsd5e11fd5775de7a2120ed7812469ca7a = []; ?>
<?php $__blaze->pushData($__attrsd5e11fd5775de7a2120ed7812469ca7a); ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $__slotsd5e11fd5775de7a2120ed7812469ca7a['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsd5e11fd5775de7a2120ed7812469ca7a); ?>
<?php _d5e11fd5775de7a2120ed7812469ca7a($__blaze, $__attrsd5e11fd5775de7a2120ed7812469ca7a, $__slotsd5e11fd5775de7a2120ed7812469ca7a, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackd5e11fd5775de7a2120ed7812469ca7a)) { $__slotsd5e11fd5775de7a2120ed7812469ca7a = array_pop($__slotsStackd5e11fd5775de7a2120ed7812469ca7a); } ?>
<?php if (! empty($__attrsStackd5e11fd5775de7a2120ed7812469ca7a)) { $__attrsd5e11fd5775de7a2120ed7812469ca7a = array_pop($__attrsStackd5e11fd5775de7a2120ed7812469ca7a); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slots56f83a515a35f4407948289a825af070['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots56f83a515a35f4407948289a825af070); ?>
<?php _56f83a515a35f4407948289a825af070($__blaze, $__attrs56f83a515a35f4407948289a825af070, $__slots56f83a515a35f4407948289a825af070, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack56f83a515a35f4407948289a825af070)) { $__slots56f83a515a35f4407948289a825af070 = array_pop($__slotsStack56f83a515a35f4407948289a825af070); } ?>
<?php if (! empty($__attrsStack56f83a515a35f4407948289a825af070)) { $__attrs56f83a515a35f4407948289a825af070 = array_pop($__attrsStack56f83a515a35f4407948289a825af070); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\NIKKA D. BERDIN\Herd\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php ENDPATH**/ ?>