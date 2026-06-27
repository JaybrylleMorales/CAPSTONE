<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('PATHWISE — AI-Powered E-Learning Platform') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        @fonts
        @vite(['resources/css/app.css'])
    </head>
    <body class="min-h-screen bg-neutral-950 text-white antialiased">

        <!-- Background glow -->
        <div class="pointer-events-none fixed inset-0 overflow-hidden">
            <div class="absolute -top-40 -left-40 h-96 w-96 rounded-full bg-purple-600/20 blur-3xl"></div>
            <div class="absolute top-1/3 -right-40 h-96 w-96 rounded-full bg-indigo-600/20 blur-3xl"></div>
            <div class="absolute -bottom-40 left-1/3 h-96 w-96 rounded-full bg-fuchsia-600/10 blur-3xl"></div>
        </div>

        <div class="relative z-10">
            <!-- Navbar -->
            <header class="mx-auto flex max-w-6xl items-center justify-between px-6 py-5">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/pathwise-logo-full.png') }}" alt="PATHWISE" class="h-14 w-auto" />
                </div>

                @if (Route::has('login'))
                    <nav class="flex items-center gap-3">
                        @auth
                            <a href="{{ route('dashboard') }}" class="rounded-lg border border-neutral-700 px-5 py-2 text-sm font-medium transition hover:border-neutral-500 hover:bg-neutral-800">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="rounded-lg px-5 py-2 text-sm font-medium text-neutral-300 transition hover:text-white">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="rounded-lg bg-gradient-to-r from-purple-500 to-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-lg transition hover:opacity-90">
                                    Get Started
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>

            <!-- Hero -->
            <main class="mx-auto max-w-6xl px-6">
                <section class="flex flex-col items-center py-16 text-center lg:py-20">
                    <span class="mb-6 inline-flex items-center gap-2 rounded-full border border-purple-500/30 bg-purple-500/10 px-4 py-1.5 text-sm text-purple-300">
                        <span class="h-2 w-2 animate-pulse rounded-full bg-purple-400"></span>
                        Powered by AI-Driven Recommendations
                    </span>

                    <h1 class="max-w-4xl text-4xl font-bold leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                        Learn smarter with
                        <span class="bg-gradient-to-r from-purple-400 via-fuchsia-400 to-indigo-400 bg-clip-text text-transparent">
                            personalized learning paths
                        </span>
                    </h1>

                    <p class="mt-6 max-w-2xl text-lg text-neutral-400">
                        PATHWISE is an AI-powered e-learning platform that recommends the right course for you based on your performance — connecting students, teachers, and institutions in one place.
                    </p>

                    <div class="mt-10 flex flex-col gap-3 sm:flex-row">
                        @guest
                            <a href="{{ route('register') }}" class="rounded-xl bg-gradient-to-r from-purple-500 to-indigo-600 px-8 py-3 font-semibold text-white shadow-lg shadow-purple-500/25 transition hover:scale-[1.02] hover:opacity-90">
                                Start Learning Free
                            </a>
                            <a href="{{ route('login') }}" class="rounded-xl border border-neutral-700 px-8 py-3 font-semibold transition hover:border-neutral-500 hover:bg-neutral-800">
                                I already have an account
                            </a>
                        @endguest
                        @auth
                            <a href="{{ route('dashboard') }}" class="rounded-xl bg-gradient-to-r from-purple-500 to-indigo-600 px-8 py-3 font-semibold text-white shadow-lg shadow-purple-500/25 transition hover:scale-[1.02] hover:opacity-90">
                                Go to Dashboard
                            </a>
                        @endauth
                    </div>

                    <div class="mt-8 flex flex-wrap items-center justify-center gap-x-8 gap-y-3 text-sm text-neutral-500">
                        <span class="flex items-center gap-2">
                            <svg class="h-4 w-4 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/></svg>
                            For students &amp; teachers
                        </span>
                        <span class="flex items-center gap-2">
                            <svg class="h-4 w-4 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/></svg>
                            AI-powered recommendations
                        </span>
                        <span class="flex items-center gap-2">
                            <svg class="h-4 w-4 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/></svg>
                            Free to start
                        </span>
                    </div>
                </section>

                <!-- Feature cards -->
                <section class="grid gap-6 pb-24 sm:grid-cols-2 lg:grid-cols-3">
                    @php
                        $features = [
                            ['title' => 'AI Course Recommendations', 'desc' => 'Get your next course suggested automatically based on your quiz performance and learning progress.', 'color' => 'purple', 'icon' => 'M12 2a7 7 0 0 0-7 7c0 2.5 1.3 4.7 3.3 6v2.7c0 .6.4 1 1 1h5.4c.6 0 1-.4 1-1V15c2-1.3 3.3-3.5 3.3-6a7 7 0 0 0-7-7Z'],
                            ['title' => 'Self-Paced Learning', 'desc' => 'Learn at your own speed with structured lessons, quizzes, and progress tracking.', 'color' => 'amber', 'icon' => 'M13 2 3 14h7l-1 8 10-12h-7l1-8Z'],
                            ['title' => 'Verified Certificates', 'desc' => 'Earn downloadable certificates automatically upon completing your courses.', 'color' => 'green', 'icon' => 'M12 2 4 5v6c0 5 3.4 9.7 8 11 4.6-1.3 8-6 8-11V5l-8-3Z'],
                            ['title' => 'Course Marketplace', 'desc' => 'Browse and enroll in courses created by teachers across different categories.', 'color' => 'blue', 'icon' => 'M3 3h18v4H3V3Zm0 6h18v12H3V9Z'],
                            ['title' => 'For Teachers', 'desc' => 'Create courses with templates, manage lessons and quizzes, and track student progress.', 'color' => 'pink', 'icon' => 'M4 4h16v12H4V4Zm2 16h12v2H6v-2Z'],
                            ['title' => 'Analytics Dashboard', 'desc' => 'Monitor performance and engagement with clear, data-driven dashboards.', 'color' => 'teal', 'icon' => 'M4 20V10m6 10V4m6 16v-6m4 6H2'],
                        ];
                        $colorMap = [
                            'purple' => 'from-purple-500/20 to-purple-600/10 text-purple-300',
                            'amber'  => 'from-amber-500/20 to-amber-600/10 text-amber-300',
                            'green'  => 'from-green-500/20 to-green-600/10 text-green-300',
                            'blue'   => 'from-blue-500/20 to-blue-600/10 text-blue-300',
                            'pink'   => 'from-pink-500/20 to-pink-600/10 text-pink-300',
                            'teal'   => 'from-teal-500/20 to-teal-600/10 text-teal-300',
                        ];
                    @endphp

                    @foreach ($features as $f)
                        <div class="group rounded-2xl border border-neutral-800 bg-neutral-900/50 p-6 transition duration-200 hover:-translate-y-1 hover:border-purple-500/40 hover:bg-neutral-900 hover:shadow-lg hover:shadow-purple-500/10">
                            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br {{ $colorMap[$f['color']] }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $f['icon'] }}" />
                                </svg>
                            </div>
                            <h3 class="mb-2 font-semibold">{{ $f['title'] }}</h3>
                            <p class="text-sm text-neutral-400">{{ $f['desc'] }}</p>
                        </div>
                    @endforeach
                </section>
            </main>

            <!-- Footer -->
            <footer class="border-t border-neutral-800">
                <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-6 py-8 text-sm text-neutral-500 sm:flex-row">
                    <p>&copy; {{ date('Y') }} PATHWISE. An AI-Powered E-Learning Platform.</p>
                    <p>Built with Laravel & Google Gemini</p>
                </div>
            </footer>
        </div>
    </body>
</html>