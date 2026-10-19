<x-layout.admin title="Daftar Pengguna">
        <x-button href="{{ route('admin.dashboard') }}" variant="secondary" class="mb-4">Kembali ke Dashboard</x-button>

    <div class="mb-6 flex items-center justify-between">
        <p class="text-[13px] text-muted">{{ $users->total() }} pengguna ditemukan</p>
        <x-button href="{{ route('admin.users.create') }}">Tambah Admin</x-button>
    </div>

    <div class="overflow-x-auto rounded border border-hairline bg-surface">
        <table class="w-full text-left text-[13px]">
            <thead>
                <tr class="border-b border-hairline text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">
                    <th class="p-4">Nama</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Role</th>
                    <th class="p-4">Telepon</th>
                    <th class="p-4">Tanggal Daftar</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-hairline">
                @forelse($users as $user)
                    <tr class="transition-colors hover:bg-surface-elevated">
                        <td class="p-4">
                            <div class="flex items-center gap-3">
                                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-primary/15 text-[13px] font-bold text-primary">
                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                </div>
                                <span class="font-medium text-ink">{{ $user->name }}</span>
                            </div>
                        </td>
                        <td class="p-4 text-body">{{ $user->email }}</td>
                        <td class="p-4">
                            @if($user->role === 'admin')
                                <span class="inline-flex items-center rounded border border-blue-500/30 bg-blue-500/15 px-2.5 py-0.5 text-[12px] font-medium text-blue-400">Admin</span>
                            @else
                                <span class="inline-flex items-center rounded border border-gray-500/30 bg-gray-500/15 px-2.5 py-0.5 text-[12px] font-medium text-gray-400">Pelanggan</span>
                            @endif
                        </td>
                        <td class="p-4 text-muted">{{ $user->phone ?? '-' }}</td>
                        <td class="p-4 text-muted">{{ $user->created_at->format('d M Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-8 text-center text-muted">Belum ada pengguna.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $users->links() }}
    </div>
</x-layout.admin>
