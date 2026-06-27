<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-neutral-950 antialiased">
        {{-- Background glow to match the landing page --}}
        <div class="pointer-events-none fixed inset-0 overflow-hidden">
            <div class="absolute -top-40 -left-40 h-96 w-96 rounded-full bg-purple-600/20 blur-3xl"></div>
            <div class="absolute -bottom-40 -right-40 h-96 w-96 rounded-full bg-indigo-600/20 blur-3xl"></div>
        </div>

        <div class="relative z-10 flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-sm flex-col gap-6">
                {{-- PATHWISE logo --}}
                <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
                    <img src="{{ asset('images/pathwise-logo-full.png') }}" alt="PATHWISE" class="h-12 w-auto" />
                    <span class="sr-only">{{ config('app.name', 'PATHWISE') }}</span>
                </a>

                {{-- Auth card --}}
                <div class="rounded-2xl border border-neutral-800 bg-neutral-900/60 p-8 shadow-xl backdrop-blur">
                    <div class="flex flex-col gap-6">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>

        @persist('toast')
            <flux:toast.group>
                <flux:toast />
            </flux:toast.group>
        @endpersist

        @fluxScripts
    </body>
</html>