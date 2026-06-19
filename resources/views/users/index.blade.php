<x-layouts::app :title="'Manage Users'">

<div class="space-y-6">

    <div>
        <h1 class="text-2xl font-bold">Manage Users</h1>
        <p class="text-gray-500">View all registered users and their roles.</p>
    </div>

    <div class="rounded-xl border bg-white p-6 shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
        <table class="w-full">
            <thead>
                <tr class="border-b">
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Email</th>
                    <th class="p-3 text-left">Role</th>
                    <th class="p-3 text-left">Date Registered</th>
                </tr>
            </thead>

            <tbody>
                @forelse($users as $user)
                    <tr class="border-b">
                        <td class="p-3">{{ $user->name }}</td>
                        <td class="p-3">{{ $user->email }}</td>
                        <td class="p-3">
                            {{ $user->roles->pluck('name')->join(', ') ?: 'No Role' }}
                        </td>
                        <td class="p-3">{{ $user->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="p-4 text-center">
                            No users found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

</x-layouts::app>