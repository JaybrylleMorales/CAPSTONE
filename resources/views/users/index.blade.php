<x-layouts::app :title="__('Manage Users')">
    <div class="space-y-6">

        <div>
            <h1 class="text-3xl font-bold text-black">Manage Users</h1>
            <p class="mt-1 text-sm text-zinc-900">
                View registered users, roles, and account activity.
            </p>
        </div>

        @php
            $totalUsers = $users->count();
            $adminCount = $users->filter(fn ($user) => $user->roles->pluck('name')->contains('admin'))->count();
            $teacherCount = $users->filter(fn ($user) => $user->roles->pluck('name')->contains('teacher'))->count();
            $studentCount = $users->filter(fn ($user) => $user->roles->pluck('name')->contains('student'))->count();
        @endphp

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-2xl border border-zinc-800 bg-zinc-600/70 p-5">
                <p class="text-sm text-black">Total Users</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $totalUsers }}</h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-black">Admins</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $adminCount }}</h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-black">Teachers</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $teacherCount }}</h2>
            </div>

            <div class="rounded-2xl border border-blue-800/40 bg-blue-950/30 p-5">
                <p class="text-sm text-black">Students</p>
                <h2 class="mt-2 text-3xl font-bold text-black">{{ $studentCount }}</h2>
            </div>
        </div>

        <div class="rounded-2xl border border-zinc-800 bg-zinc-700/60 shadow-lg shadow-purple-950/10">
            <div class="flex flex-col gap-3 border-b border-zinc-800 px-6 py-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-black">User Directory</h2>
                    <p class="text-sm text-black">All registered PathWise accounts.</p>
                </div>

                <div class="rounded-xl border border-zinc-800 bg-zinc-950 px-4 py-2 text-sm text-white">
                    Search can be added later
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-zinc-950/70 text-xs uppercase tracking-wider text-white">
                        <tr>
                            <th class="px-6 py-4">User</th>
                            <th class="px-6 py-4">Email</th>
                            <th class="px-6 py-4">Role</th>
                            <th class="px-6 py-4">Date Registered</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-zinc-800">
                        @forelse($users as $user)
                            @php
                                $roles = $user->roles->pluck('name');
                            @endphp

                            <tr class="hover:bg-white/3">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-purple-600/20 text-sm font-bold text-purple-300">
                                            {{ strtoupper(substr($user->name, 0, 1)) }}
                                        </div>

                                        <div>
                                            <p class="font-semibold text-black">{{ $user->name }}</p>
                                            <p class="text-xs text-black">PathWise User</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-black">
                                    {{ $user->email }}
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap gap-2">
                                        @forelse($roles as $role)
                                            @php
                                                $roleClass = match ($role) {
                                                    'admin' => 'bg-black text-purple-400',
                                                    'teacher' => 'bg-black text-emerald-400',
                                                    'student' => 'bg-black text-blue-400',
                                                    default => 'bg-black text-white',
                                                };
                                            @endphp

                                            <span class="rounded-full px-3 py-1 text-xs font-semibold {{ $roleClass }}">
                                                {{ ucfirst($role) }}
                                            </span>
                                        @empty
                                            <span class="rounded-full bg-black px-3 py-1 text-xs font-semibold text-white">
                                                No Role
                                            </span>
                                        @endforelse
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-black">
                                    {{ $user->created_at->format('M d, Y h:i A') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-16 text-center">
                                    <h3 class="text-lg font-semibold text-white">No users found</h3>
                                    <p class="mt-1 text-sm text-zinc-400">
                                        Registered users will appear here.
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-layouts::app>