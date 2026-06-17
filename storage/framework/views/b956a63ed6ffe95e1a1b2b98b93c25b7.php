<?php
if (!function_exists('_b956a63ed6ffe95e1a1b2b98b93c25b7')):
function _b956a63ed6ffe95e1a1b2b98b93c25b7($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>
<?php $iconTrailing ??= $attributes->pluck('icon:trailing'); ?>
<?php $iconVariant ??= $attributes->pluck('icon:variant'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'right',
    'tooltipKbd' => null,
    'tooltip' => null,
    'iconVariant' => 'outline',
    'iconTrailing' => null,
    'badgeColor' => null,
    'iconDot' => null,
    'accent' => true,
    'badge' => null,
    'icon' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$iconTrailing ??= $attributes['icon-trailing'] ?? $attributes['iconTrailing'] ?? $__defaults['iconTrailing']; unset($attributes['iconTrailing'], $attributes['icon-trailing']);
$badgeColor ??= $attributes['badge-color'] ?? $attributes['badgeColor'] ?? $__defaults['badgeColor']; unset($attributes['badgeColor'], $attributes['badge-color']);
$iconDot ??= $attributes['icon-dot'] ?? $attributes['iconDot'] ?? $__defaults['iconDot']; unset($attributes['iconDot'], $attributes['icon-dot']);
$accent ??= $attributes['accent'] ?? $__defaults['accent']; unset($attributes['accent']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
$icon ??= $attributes['icon'] ?? $__defaults['icon']; unset($attributes['icon']);
unset($__defaults);
?>

<?php
$tooltip ??= $slot->isNotEmpty() ? (string) $slot : null;

// Size-up icons in square/icon-only buttons...
$iconClasses = Flux::classes('size-4')
    ->add('in-data-flux-sidebar-group-dropdown:text-zinc-400! dark:in-data-flux-sidebar-group-dropdown:text-white/80!')
    ->add('[[data-flux-sidebar-item]:hover_&]:text-current!');

$classes = Flux::classes()
    ->add('h-8 in-data-flux-sidebar-on-mobile:h-10 relative flex items-center gap-3 rounded-lg')
    ->add('in-data-flux-sidebar-collapsed-desktop:w-10 in-data-flux-sidebar-collapsed-desktop:justify-center')
    ->add('py-0 text-start w-full px-3 has-data-flux-navlist-badge:not-in-data-flux-sidebar-collapsed-desktop:pe-1.5 my-px')
    ->add('text-zinc-500 dark:text-white/80')
    ->add(match ($accent) {
        true => [
            'data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content)',
            'data-current:bg-white dark:data-current:bg-white/[7%] data-current:border data-current:border-zinc-200 dark:data-current:border-transparent',
            'hover:text-zinc-800 dark:hover:text-white dark:hover:bg-white/[7%] hover:bg-zinc-800/5 ',
            'border border-transparent',
        ],
        false => [
            'data-current:text-zinc-800 dark:data-current:text-zinc-100 data-current:border-zinc-200',
            'data-current:bg-white dark:data-current:bg-white/10 data-current:border data-current:border-zinc-200 dark:data-current:border-white/10 data-current:shadow-xs',
            'hover:text-zinc-800 dark:hover:text-white',
        ],
    })
    // Override the default styles to match dropdowns for when the item is inside a collapsed group dropdown...
    ->add('in-data-flux-sidebar-group-dropdown:w-auto! in-data-flux-sidebar-group-dropdown:px-2!')
    ->add('in-data-flux-sidebar-group-dropdown:text-zinc-800! in-data-flux-sidebar-group-dropdown:bg-white! in-data-flux-sidebar-group-dropdown:hover:bg-zinc-50!')
    ->add('dark:in-data-flux-sidebar-group-dropdown:text-white! dark:in-data-flux-sidebar-group-dropdown:bg-transparent! dark:in-data-flux-sidebar-group-dropdown:hover:bg-zinc-600!')
    ;
?>

<?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/5c91191d0afe646947880ed18caedc93.php'); ?>
<?php if (isset($__slots5c91191d0afe646947880ed18caedc93)) { $__slotsStack5c91191d0afe646947880ed18caedc93[] = $__slots5c91191d0afe646947880ed18caedc93; } ?>
<?php if (isset($__attrs5c91191d0afe646947880ed18caedc93)) { $__attrsStack5c91191d0afe646947880ed18caedc93[] = $__attrs5c91191d0afe646947880ed18caedc93; } ?>
<?php $__attrs5c91191d0afe646947880ed18caedc93 = ['position' => $tooltipPosition]; ?>
<?php $__slots5c91191d0afe646947880ed18caedc93 = []; ?>
<?php $__blaze->pushData($__attrs5c91191d0afe646947880ed18caedc93); ?>
<?php ob_start(); ?>
    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/button-or-link.blade.php', $__blaze->compiledPath.'/8bc35304bfd030d0a60beab017fdbc69.php'); ?>
<?php if (isset($__slots8bc35304bfd030d0a60beab017fdbc69)) { $__slotsStack8bc35304bfd030d0a60beab017fdbc69[] = $__slots8bc35304bfd030d0a60beab017fdbc69; } ?>
<?php if (isset($__attrs8bc35304bfd030d0a60beab017fdbc69)) { $__attrsStack8bc35304bfd030d0a60beab017fdbc69[] = $__attrs8bc35304bfd030d0a60beab017fdbc69; } ?>
<?php $__attrs8bc35304bfd030d0a60beab017fdbc69 = ['attributes' => $attributes->class($classes),'dataFluxSidebarItem' => true]; ?>
<?php $__slots8bc35304bfd030d0a60beab017fdbc69 = []; ?>
<?php $__blaze->pushData($__attrs8bc35304bfd030d0a60beab017fdbc69); ?>
<?php ob_start(); ?>
        <?php if ($icon): ?>
            <div class="relative">
                <?php if (is_string($icon) && $icon !== ''): ?>
                    <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $icon, 'variant' => $iconVariant, 'class' => $iconClasses]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/c4802740504849e4cbd8a3077602cc50.php'); ?>
<?php $__blaze->pushData(['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses]); ?>
<?php _c4802740504849e4cbd8a3077602cc50($__blaze, ['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses], [], ['icon', 'variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                <?php else: ?>
                    <?php echo e($icon); ?>

                <?php endif; ?>

                <?php if ($iconDot): ?>
                    <div class="absolute top-[-2px] end-[-2px]">
                        <div class="size-[6px] rounded-full bg-zinc-500 dark:bg-zinc-400"></div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($slot->isNotEmpty()): ?>
            <div class="
                in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden
                flex-1 text-sm font-medium truncate [[data-nav-footer]_&]:hidden [[data-nav-sidebar]_[data-nav-footer]_&]:block" data-content><?php echo e($slot); ?></div>
        <?php endif; ?>

        <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
            <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $iconTrailing, 'variant' => $iconVariant, 'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden size-4!']); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/c4802740504849e4cbd8a3077602cc50.php'); ?>
<?php $__blaze->pushData(['icon' => $iconTrailing,'variant' => $iconVariant,'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden size-4!']); ?>
<?php _c4802740504849e4cbd8a3077602cc50($__blaze, ['icon' => $iconTrailing,'variant' => $iconVariant,'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden size-4!'], [], ['icon', 'variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
        <?php elseif ($iconTrailing): ?>
            <?php echo e($iconTrailing); ?>

        <?php endif; ?>

        <?php if (isset($badge) && $badge !== ''): ?>
            <?php $badgeAttributes = Flux::attributesAfter('badge:', $attributes, ['color' => $badgeColor]); ?>
            <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/navlist/badge.blade.php', $__blaze->compiledPath.'/dbcbbac58ed11ef04ba73a0c9dc5185b.php'); ?>
<?php if (isset($__slotsdbcbbac58ed11ef04ba73a0c9dc5185b)) { $__slotsStackdbcbbac58ed11ef04ba73a0c9dc5185b[] = $__slotsdbcbbac58ed11ef04ba73a0c9dc5185b; } ?>
<?php if (isset($__attrsdbcbbac58ed11ef04ba73a0c9dc5185b)) { $__attrsStackdbcbbac58ed11ef04ba73a0c9dc5185b[] = $__attrsdbcbbac58ed11ef04ba73a0c9dc5185b; } ?>
<?php $__attrsdbcbbac58ed11ef04ba73a0c9dc5185b = ['attributes' => $badgeAttributes,'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden']; ?>
<?php $__slotsdbcbbac58ed11ef04ba73a0c9dc5185b = []; ?>
<?php $__blaze->pushData($__attrsdbcbbac58ed11ef04ba73a0c9dc5185b); ?>
<?php ob_start(); ?><?php echo e($badge); ?><?php $__slotsdbcbbac58ed11ef04ba73a0c9dc5185b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsdbcbbac58ed11ef04ba73a0c9dc5185b); ?>
<?php _dbcbbac58ed11ef04ba73a0c9dc5185b($__blaze, $__attrsdbcbbac58ed11ef04ba73a0c9dc5185b, $__slotsdbcbbac58ed11ef04ba73a0c9dc5185b, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackdbcbbac58ed11ef04ba73a0c9dc5185b)) { $__slotsdbcbbac58ed11ef04ba73a0c9dc5185b = array_pop($__slotsStackdbcbbac58ed11ef04ba73a0c9dc5185b); } ?>
<?php if (! empty($__attrsStackdbcbbac58ed11ef04ba73a0c9dc5185b)) { $__attrsdbcbbac58ed11ef04ba73a0c9dc5185b = array_pop($__attrsStackdbcbbac58ed11ef04ba73a0c9dc5185b); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slots8bc35304bfd030d0a60beab017fdbc69['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots8bc35304bfd030d0a60beab017fdbc69); ?>
<?php _8bc35304bfd030d0a60beab017fdbc69($__blaze, $__attrs8bc35304bfd030d0a60beab017fdbc69, $__slots8bc35304bfd030d0a60beab017fdbc69, ['attributes', 'dataFluxSidebarItem'], ['dataFluxSidebarItem' => 'data-flux-sidebar-item'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack8bc35304bfd030d0a60beab017fdbc69)) { $__slots8bc35304bfd030d0a60beab017fdbc69 = array_pop($__slotsStack8bc35304bfd030d0a60beab017fdbc69); } ?>
<?php if (! empty($__attrsStack8bc35304bfd030d0a60beab017fdbc69)) { $__attrs8bc35304bfd030d0a60beab017fdbc69 = array_pop($__attrsStack8bc35304bfd030d0a60beab017fdbc69); } ?>
<?php $__blaze->popData(); ?>

    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/ba9b167ed64e546760028e606de3c2c9.php'); ?>
<?php if (isset($__slotsba9b167ed64e546760028e606de3c2c9)) { $__slotsStackba9b167ed64e546760028e606de3c2c9[] = $__slotsba9b167ed64e546760028e606de3c2c9; } ?>
<?php if (isset($__attrsba9b167ed64e546760028e606de3c2c9)) { $__attrsStackba9b167ed64e546760028e606de3c2c9[] = $__attrsba9b167ed64e546760028e606de3c2c9; } ?>
<?php $__attrsba9b167ed64e546760028e606de3c2c9 = ['kbd' => $tooltipKbd,'class' => 'not-in-data-flux-sidebar-collapsed-desktop:hidden in-data-flux-sidebar-group-dropdown:hidden cursor-default']; ?>
<?php $__slotsba9b167ed64e546760028e606de3c2c9 = []; ?>
<?php $__blaze->pushData($__attrsba9b167ed64e546760028e606de3c2c9); ?>
<?php ob_start(); ?>
        <?php echo e($tooltip); ?>

    <?php $__slotsba9b167ed64e546760028e606de3c2c9['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsba9b167ed64e546760028e606de3c2c9); ?>
<?php _ba9b167ed64e546760028e606de3c2c9($__blaze, $__attrsba9b167ed64e546760028e606de3c2c9, $__slotsba9b167ed64e546760028e606de3c2c9, ['kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackba9b167ed64e546760028e606de3c2c9)) { $__slotsba9b167ed64e546760028e606de3c2c9 = array_pop($__slotsStackba9b167ed64e546760028e606de3c2c9); } ?>
<?php if (! empty($__attrsStackba9b167ed64e546760028e606de3c2c9)) { $__attrsba9b167ed64e546760028e606de3c2c9 = array_pop($__attrsStackba9b167ed64e546760028e606de3c2c9); } ?>
<?php $__blaze->popData(); ?>
<?php $__slots5c91191d0afe646947880ed18caedc93['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots5c91191d0afe646947880ed18caedc93); ?>
<?php _5c91191d0afe646947880ed18caedc93($__blaze, $__attrs5c91191d0afe646947880ed18caedc93, $__slots5c91191d0afe646947880ed18caedc93, ['position'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack5c91191d0afe646947880ed18caedc93)) { $__slots5c91191d0afe646947880ed18caedc93 = array_pop($__slotsStack5c91191d0afe646947880ed18caedc93); } ?>
<?php if (! empty($__attrsStack5c91191d0afe646947880ed18caedc93)) { $__attrs5c91191d0afe646947880ed18caedc93 = array_pop($__attrsStack5c91191d0afe646947880ed18caedc93); } ?>
<?php $__blaze->popData(); ?><?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\Users\admin\pathwise\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/item.blade.php ENDPATH**/ ?>