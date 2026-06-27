<?php # [BlazeFolded]:{flux::sidebar.collapse}:{C:\Users\admin\pathwise\resources\views/flux/sidebar/collapse.blade.php}:{1782477721} ?>
<?php # [BlazeFolded]:{flux::sidebar.header}:{C:\Users\admin\pathwise\resources\views/flux/sidebar/header.blade.php}:{1782477721} ?>
<?php # [BlazeFolded]:{flux::sidebar.nav}:{C:\Users\admin\pathwise\resources\views/flux/sidebar/nav.blade.php}:{1782477721} ?>
<?php # [BlazeFolded]:{flux::spacer}:{C:\Users\admin\pathwise\resources\views/flux/spacer.blade.php}:{1782477721} ?>
<?php # [BlazeFolded]:{flux::sidebar.nav}:{C:\Users\admin\pathwise\resources\views/flux/sidebar/nav.blade.php}:{1782477721} ?>
<?php # [BlazeFolded]:{flux::sidebar}:{C:\Users\admin\pathwise\resources\views/flux/sidebar/index.blade.php}:{1782477721} ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="dark">
<head>
    <?php echo $__env->make('partials.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <style>
        html.dark [data-flux-sidebar] [data-flux-sidebar-item],
        html.dark ui-sidebar [data-flux-sidebar-item] {
            border-radius: 12px !important;
            transition: all 180ms ease !important;
        }

        html.dark [data-flux-sidebar] [data-flux-sidebar-item]:hover,
        html.dark ui-sidebar [data-flux-sidebar-item]:hover {
            background-color: rgb(168 85 247 / 0.10) !important;
            color: rgb(216 180 254) !important;
        }

        html.dark [data-flux-sidebar] [data-flux-sidebar-item][data-current],
        html.dark ui-sidebar [data-flux-sidebar-item][data-current] {
            background-image: linear-gradient(90deg, rgb(168 85 247 / 0.35), rgb(99 102 241 / 0.18)) !important;
            color: #ffffff !important;
            box-shadow: inset 4px 0 0 rgb(168 85 247), 0 0 18px rgb(168 85 247 / 0.15) !important;
        }

        html.dark [data-flux-sidebar] [data-flux-sidebar-item][data-current] svg,
        html.dark ui-sidebar [data-flux-sidebar-item][data-current] svg {
            color: rgb(216 180 254) !important;
        }
    </style>
</head>

<body class="min-h-screen bg-white dark:bg-neutral-950">
    <div class="pointer-events-none fixed inset-0 z-0 hidden overflow-hidden dark:block">
        <div class="absolute -top-40 left-1/4 h-96 w-96 rounded-full bg-purple-600/10 blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 h-96 w-96 rounded-full bg-indigo-600/10 blur-3xl"></div>
    </div>

    <?php ob_start(); ?><?php $__blaze->pushData(['sticky' => true, 'collapsible' => 'mobile', 'class' => 'relative z-10 w-[290px] border-e border-zinc-200 bg-zinc-50 dark:border-neutral-800 dark:bg-neutral-950/90 dark:backdrop-blur']); $__env->pushConsumableComponentData(['sticky' => true, 'collapsible' => 'mobile', 'class' => 'relative z-10 w-[290px] border-e border-zinc-200 bg-zinc-50 dark:border-neutral-800 dark:bg-neutral-950/90 dark:backdrop-blur']); ?><ui-sidebar-toggle class="z-20 fixed inset-0 bg-black/10 hidden data-flux-sidebar-on-mobile:not-data-flux-sidebar-collapsed-mobile:block" data-flux-sidebar-backdrop></ui-sidebar-toggle>

<ui-sidebar
    class="[grid-area:sidebar] z-1 flex flex-col gap-4 [:where(&amp;)]:w-64 p-4 data-flux-sidebar-collapsed-desktop:w-14 data-flux-sidebar-collapsed-desktop:px-2 data-flux-sidebar-collapsed-desktop:cursor-e-resize rtl:data-flux-sidebar-collapsed-desktop:cursor-w-resize max-lg:data-flux-sidebar-cloak:hidden data-flux-sidebar-on-mobile:data-flux-sidebar-collapsed-mobile:-translate-x-full data-flux-sidebar-on-mobile:data-flux-sidebar-collapsed-mobile:rtl:translate-x-full z-20! data-flux-sidebar-on-mobile:start-0! data-flux-sidebar-on-mobile:fixed! data-flux-sidebar-on-mobile:top-0! data-flux-sidebar-on-mobile:min-h-dvh! data-flux-sidebar-on-mobile:max-h-dvh! max-h-dvh overflow-y-auto overscroll-contain relative z-10 w-[290px] border-e border-zinc-200 bg-zinc-50 dark:border-neutral-800 dark:bg-neutral-950/90 dark:backdrop-blur" x-init="$el.classList.add(&#039;transition-transform&#039;)"
     collapsible="mobile"          sticky     x-data
    data-flux-sidebar-cloak
    data-flux-sidebar
>
    <?php ob_start(); ?>
<?php ob_start(); ?><div class="flex items-center justify-between gap-2 min-h-10" data-flux-sidebar-header>
    <?php ob_start(); ?>

    <a
        href="<?php echo e(route('dashboard')); ?>"
        class="flex items-center gap-4 px-5 py-6 transition hover:opacity-95"
    >

        <div
            class="flex h-14 w-14 items-center justify-center rounded-2xl
                   bg-gradient-to-br from-purple-600/20 to-indigo-600/20
                   ring-1 ring-purple-500/20"
        >
            <img
                src="<?php echo e(asset('images/pathwise-icon.png')); ?>"
                alt="PATHWISE"
                class="h-11 w-11 shrink-0
                       drop-shadow-[0_0_18px_rgba(168,85,247,0.55)]"
            >
        </div>

        <div class="min-w-0">
            <div
                class="text-xl font-black tracking-[0.18em]
                       text-white"
            >
                PATHWISE
            </div>

            <div
                class="mt-0.5 text-[10px]
                       font-semibold uppercase
                       tracking-[0.35em]
                       text-purple-400"
            >
                AI LEARNING PLATFORM
            </div>
        </div>

    </a>

    <?php ob_start(); ?><ui-sidebar-toggle class="w-10 h-8 flex items-center justify-center in-data-flux-sidebar-collapsed-desktop:opacity-0 in-data-flux-sidebar-collapsed-desktop:absolute in-data-flux-sidebar-collapsed-desktop:in-data-flux-sidebar-active:opacity-100  lg:hidden" data-flux-sidebar-collapse>
    <ui-tooltip position="right center"  data-flux-tooltip >
        <button type="button" class="size-10 relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none text-sm rounded-lg inline-flex  bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-500 hover:text-zinc-800 dark:text-zinc-400 dark:hover:text-white in-data-flux-sidebar-collapsed-desktop:cursor-e-resize rtl:in-data-flux-sidebar-collapsed-desktop:cursor-w-resize [&amp;[collapsible=&quot;mobile&quot;]]:in-data-flux-sidebar-on-desktop:hidden rtl:rotate-180">
            <svg class="text-zinc-500 dark:text-zinc-400" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.5 3.75V16.25M3.4375 16.25H16.5625C17.08 16.25 17.5 15.83 17.5 15.3125V4.6875C17.5 4.17 17.08 3.75 16.5625 3.75H3.4375C2.92 3.75 2.5 4.17 2.5 4.6875V15.3125C2.5 15.83 2.92 16.25 3.4375 16.25Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>

                    <div popover="manual" class="relative py-2 px-2.5 rounded-md text-xs text-white font-medium bg-zinc-800 dark:bg-zinc-700 dark:border dark:border-white/10 p-0 overflow-visible" data-flux-tooltip-content>
    Toggle sidebar

    </div>
            </ui-tooltip>
</ui-sidebar-toggle>
<?php echo ltrim(ob_get_clean()); ?>

<?php echo trim(ob_get_clean()); ?>

</div><?php echo ltrim(ob_get_clean()); ?>

<div class="mx-4 border-b border-zinc-800/80"></div>
        <?php ob_start(); ?><nav class="flex flex-col overflow-visible min-h-auto" data-flux-sidebar-nav>
    <?php ob_start(); ?> 
            <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/group.blade.php', $__blaze->compiledPath.'/37018356addbef9f50edabdc8e57ddb1.php'); ?>
<?php if (isset($__slots37018356addbef9f50edabdc8e57ddb1)) { $__slotsStack37018356addbef9f50edabdc8e57ddb1[] = $__slots37018356addbef9f50edabdc8e57ddb1; } ?>
<?php if (isset($__attrs37018356addbef9f50edabdc8e57ddb1)) { $__attrsStack37018356addbef9f50edabdc8e57ddb1[] = $__attrs37018356addbef9f50edabdc8e57ddb1; } ?>
<?php $__attrs37018356addbef9f50edabdc8e57ddb1 = ['heading' => __('Main'),'class' => 'mt-2 grid gap-1 px-2']; ?>
<?php $__slots37018356addbef9f50edabdc8e57ddb1 = []; ?>
<?php $__blaze->pushData($__attrs37018356addbef9f50edabdc8e57ddb1); ?>
<?php ob_start(); ?>

                <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'home','href' => route('dashboard'),'current' => request()->routeIs('dashboard'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                    <?php echo e(__('Dashboard')); ?>

                <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->user()->hasRole('admin')): ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'users','href' => route('users.index'),'current' => request()->routeIs('users.*'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Users')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'book-open','href' => route('courses.index'),'current' => request()->routeIs('courses.*'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Courses')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'folder','href' => route('course-categories.index'),'current' => request()->routeIs('course-categories.*'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Categories')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'document','href' => route('lessons.index'),'current' => request()->routeIs('lessons.*'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Lessons')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'clipboard','href' => route('quizzes.index'),'current' => request()->routeIs('quizzes.*'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Quizzes')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'credit-card','href' => route('admin.transactions.index'),'current' => request()->routeIs('admin.transactions.*'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Transactions')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'academic-cap','href' => route('certificate-management.index'),'current' => request()->routeIs('certificate-management.*'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Certificates')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'sparkles','href' => route('ai-recommendations.index'),'current' => request()->routeIs('ai-recommendations.*'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('AI Recommendations')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'chart-bar','href' => route('reports.index'),'current' => request()->routeIs('reports.*'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Reports')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                <?php elseif(auth()->user()->hasRole('teacher')): ?>

                    <?php
                        $teacherCoursesCount = \App\Models\Course::where('teacher_id', auth()->id())->count();
                        $teacherStudentsCount = \App\Models\Enrollment::whereHas('course', function ($query) {
                            $query->where('teacher_id', auth()->id());
                        })->count();
                    ?>

                    <div class="mx-3 mb-5 rounded-2xl border border-zinc-800 bg-zinc-900/80 p-4 shadow-lg shadow-purple-950/20">
                        <p class="text-[11px] font-semibold uppercase tracking-widest text-zinc-500">
                            My Stats
                        </p>

                        <div class="mt-3 space-y-3 text-sm">
                            <div class="flex items-center justify-between">
                                <span class="text-zinc-400">📚 Courses</span>
                                <span class="font-bold text-white"><?php echo e($teacherCoursesCount); ?></span>
                            </div>

                            <div class="flex items-center justify-between">
                                <span class="text-zinc-400">👥 Students</span>
                                <span class="font-bold text-white"><?php echo e($teacherStudentsCount); ?></span>
                            </div>
                        </div>
                    </div>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'book-open','href' => route('teacher.my-courses'),'current' => request()->routeIs('teacher.my-courses'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('My Courses')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'document','href' => route('teacher.lessons.index'),'current' => request()->routeIs('teacher.lessons.*'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Lessons')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'clipboard','href' => route('teacher.quiz-results.index'),'current' => request()->routeIs('teacher.quiz-results.*'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Quiz Results')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'users','href' => route('teacher.student-progress.index'),'current' => request()->routeIs('teacher.student-progress.*'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Student Progress')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                <?php elseif(auth()->user()->hasRole('student')): ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'shopping-bag','href' => route('student.marketplace'),'current' => request()->routeIs('student.marketplace'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Marketplace')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'book-open','href' => route('student.my-courses'),'current' => request()->routeIs('student.my-courses'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('My Courses')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'map','href' => route('student.learning-paths'),'current' => request()->routeIs('student.learning-paths*'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Learning Paths')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'sparkles','href' => route('student.recommendations'),'current' => request()->routeIs('student.recommendations'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('AI Recommendations')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'credit-card','href' => route('student.transactions'),'current' => request()->routeIs('student.transactions*'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Transactions')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                    <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'academic-cap','href' => route('student.certificates'),'current' => request()->routeIs('student.certificates'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                        <?php echo e(__('Certificates')); ?>

                    <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>

                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php $__slots37018356addbef9f50edabdc8e57ddb1['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots37018356addbef9f50edabdc8e57ddb1); ?>
<?php _37018356addbef9f50edabdc8e57ddb1($__blaze, $__attrs37018356addbef9f50edabdc8e57ddb1, $__slots37018356addbef9f50edabdc8e57ddb1, ['heading'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack37018356addbef9f50edabdc8e57ddb1)) { $__slots37018356addbef9f50edabdc8e57ddb1 = array_pop($__slotsStack37018356addbef9f50edabdc8e57ddb1); } ?>
<?php if (! empty($__attrsStack37018356addbef9f50edabdc8e57ddb1)) { $__attrs37018356addbef9f50edabdc8e57ddb1 = array_pop($__attrsStack37018356addbef9f50edabdc8e57ddb1); } ?>
<?php $__blaze->popData(); ?>
        <?php echo trim(ob_get_clean()); ?>

</nav>
<?php echo ltrim(ob_get_clean()); ?>

        <?php ob_start(); ?><div class="flex-1" data-flux-spacer></div>
<?php echo ltrim(ob_get_clean()); ?>

        <div class="mx-3 mb-3 border-t border-zinc-800"></div>

        <?php ob_start(); ?><?php $__blaze->pushData(['class' => 'pt-3']); $__env->pushConsumableComponentData(['class' => 'pt-3']); ?><nav class="flex flex-col overflow-visible min-h-auto pt-3" data-flux-sidebar-nav>
    <?php ob_start(); ?>
            <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/group.blade.php', $__blaze->compiledPath.'/37018356addbef9f50edabdc8e57ddb1.php'); ?>
<?php if (isset($__slots37018356addbef9f50edabdc8e57ddb1)) { $__slotsStack37018356addbef9f50edabdc8e57ddb1[] = $__slots37018356addbef9f50edabdc8e57ddb1; } ?>
<?php if (isset($__attrs37018356addbef9f50edabdc8e57ddb1)) { $__attrsStack37018356addbef9f50edabdc8e57ddb1[] = $__attrs37018356addbef9f50edabdc8e57ddb1; } ?>
<?php $__attrs37018356addbef9f50edabdc8e57ddb1 = ['heading' => __('Account'),'class' => 'grid gap-1 px-2']; ?>
<?php $__slots37018356addbef9f50edabdc8e57ddb1 = []; ?>
<?php $__blaze->pushData($__attrs37018356addbef9f50edabdc8e57ddb1); ?>
<?php ob_start(); ?>
                <?php $__blaze->ensureRequired('C:\Users\admin\pathwise\resources\views/flux/sidebar/item.blade.php', $__blaze->compiledPath.'/78e4657e5ef7e8ddac92fd806d2fb04b.php'); ?>
<?php if (isset($__slots78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__slots78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php if (isset($__attrs78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b[] = $__attrs78e4657e5ef7e8ddac92fd806d2fb04b; } ?>
<?php $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = ['icon' => 'cog','href' => route('profile.edit'),'current' => request()->routeIs('profile.edit'),'wire:navigate' => true]; ?>
<?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b = []; ?>
<?php $__blaze->pushData($__attrs78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php ob_start(); ?>
                    <?php echo e(__('Settings')); ?>

                <?php $__slots78e4657e5ef7e8ddac92fd806d2fb04b['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots78e4657e5ef7e8ddac92fd806d2fb04b); ?>
<?php _78e4657e5ef7e8ddac92fd806d2fb04b($__blaze, $__attrs78e4657e5ef7e8ddac92fd806d2fb04b, $__slots78e4657e5ef7e8ddac92fd806d2fb04b, ['href', 'current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__slots78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__slotsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php if (! empty($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b)) { $__attrs78e4657e5ef7e8ddac92fd806d2fb04b = array_pop($__attrsStack78e4657e5ef7e8ddac92fd806d2fb04b); } ?>
<?php $__blaze->popData(); ?>
            <?php $__slots37018356addbef9f50edabdc8e57ddb1['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots37018356addbef9f50edabdc8e57ddb1); ?>
<?php _37018356addbef9f50edabdc8e57ddb1($__blaze, $__attrs37018356addbef9f50edabdc8e57ddb1, $__slots37018356addbef9f50edabdc8e57ddb1, ['heading'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack37018356addbef9f50edabdc8e57ddb1)) { $__slots37018356addbef9f50edabdc8e57ddb1 = array_pop($__slotsStack37018356addbef9f50edabdc8e57ddb1); } ?>
<?php if (! empty($__attrsStack37018356addbef9f50edabdc8e57ddb1)) { $__attrs37018356addbef9f50edabdc8e57ddb1 = array_pop($__attrsStack37018356addbef9f50edabdc8e57ddb1); } ?>
<?php $__blaze->popData(); ?>
        <?php echo trim(ob_get_clean()); ?>

</nav>
<?php $__blaze->popData(); $__env->popConsumableComponentData(); ?><?php echo ltrim(ob_get_clean()); ?>

        <?php if (isset($component)) { $__componentOriginalca54afb14f8d43d7f1acc5dbe6164a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalca54afb14f8d43d7f1acc5dbe6164a0a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.desktop-user-menu','data' => ['class' => 'hidden lg:block','name' => auth()->user()->name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('desktop-user-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'hidden lg:block','name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(auth()->user()->name)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalca54afb14f8d43d7f1acc5dbe6164a0a)): ?>
<?php $attributes = $__attributesOriginalca54afb14f8d43d7f1acc5dbe6164a0a; ?>
<?php unset($__attributesOriginalca54afb14f8d43d7f1acc5dbe6164a0a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalca54afb14f8d43d7f1acc5dbe6164a0a)): ?>
<?php $component = $__componentOriginalca54afb14f8d43d7f1acc5dbe6164a0a; ?>
<?php unset($__componentOriginalca54afb14f8d43d7f1acc5dbe6164a0a); ?>
<?php endif; ?>
    <?php echo trim(ob_get_clean()); ?>

</ui-sidebar>
<?php $__blaze->popData(); $__env->popConsumableComponentData(); ?><?php echo ltrim(ob_get_clean()); ?>

    <?php echo e($slot); ?>


    <?php app('livewire')->forceAssetInjection(); ?>
<?php echo app('flux')->scripts(); ?>

</body>
</html><?php /**PATH C:\Users\admin\pathwise\resources\views/layouts/app/sidebar.blade.php ENDPATH**/ ?>