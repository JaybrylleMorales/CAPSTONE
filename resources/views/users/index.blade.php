<x-layouts::app :title="__('Manage Users')">
    <div class="space-y-6">

        <div>
            <h1 class="text-3xl font-bold text-white">Manage Users</h1>
            <p class="mt-1 text-sm text-zinc-400">
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
            <div class="rounded-2xl border border-zinc-800 bg-zinc-900/70 p-5">
                <p class="text-sm text-zinc-400">Total Users</p>
                <h2 class="mt-2 text-3xl font-bold text-white">{{ $totalUsers }}</h2>
            </div>

            <div class="rounded-2xl border border-purple-800/40 bg-purple-950/30 p-5">
                <p class="text-sm text-purple-300">Admins</p>
                <h2 class="mt-2 text-3xl font-bold text-purple-400">{{ $adminCount }}</h2>
            </div>

            <div class="rounded-2xl border border-emerald-800/40 bg-emerald-950/30 p-5">
                <p class="text-sm text-emerald-300">Teachers</p>
                <h2 class="mt-2 text-3xl font-bold text-emerald-400">{{ $teacherCount }}</h2>
            </div>

            <div class="rounded-2xl border border-blue-800/40 bg-blue-950/30 p-5">
                <p class="text-sm text-blue-300">Students</p>
                <h2 class="mt-2 text-3xl font-bold text-blue-400">{{ $studentCount }}</h2>
            </div>
        </div>

        <div class="rounded-2xl border border-zinc-800 bg-zinc-900/60 shadow-lg shadow-purple-950/10">
            <div class="flex flex-col gap-3 border-b border-zinc-800 px-6 py-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-white">User Directory</h2>
                    <p class="text-sm text-zinc-400">All registered PathWise accounts.</p>
                </div>

                <div class="rounded-xl border border-zinc-800 bg-zinc-950 px-4 py-2 text-sm text-zinc-500">
                    Search can be added later
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="bg-zinc-950/70 text-xs uppercase tracking-wider text-zinc-400">
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

                            <tr class="hover:bg-white/[0.03]">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-purple-600/20 text-sm font-bold text-purple-300">
                                            {{ strtoupper(substr($user->name, 0, 1)) }}
                                        </div>

                                        <div>
                                            <p class="font-semibold text-white">{{ $user->name }}</p>
                                            <p class="text-xs text-zinc-500">PathWise User</p>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-zinc-300">
                                    {{ $user->email }}
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap gap-2">
                                        @forelse($roles as $role)
                                            @php
                                                $roleClass = match ($role) {
                                                    'admin' => 'bg-purple-500/15 text-purple-400',
                                                    'teacher' => 'bg-emerald-500/15 text-emerald-400',
                                                    'student' => 'bg-blue-500/15 text-blue-400',
                                                    default => 'bg-zinc-500/15 text-zinc-300',
                                                };
                                            @endphp

                                            <span class="rounded-full px-3 py-1 text-xs font-semibold {{ $roleClass }}">
                                                {{ ucfirst($role) }}
                                            </span>
                                        @empty
                                            <span class="rounded-full bg-zinc-500/15 px-3 py-1 text-xs font-semibold text-zinc-300">
                                                No Role
                                            </span>
                                        @endforelse
                                    </div>
                                </td>

                                <td class="px-6 py-4 text-zinc-400">
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