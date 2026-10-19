<x-layout.admin title="Daftar Test Drive">
        <x-button href="{{ route('admin.dashboard') }}" variant="secondary" class="mb-4">Kembali ke Dashboard</x-button>

    <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <p class="text-[13px] text-muted">{{ $testDrives->total() }} permintaan ditemukan</p>
        <form method="GET" action="{{ route('admin.test-drives.index') }}" class="flex items-center gap-3">
            <select name="status" onchange="this.form.submit()" class="text-input h-10 w-auto !text-[13px]">
                <option value="">Semua Status</option>
                <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="confirmed" {{ request('status') === 'confirmed' ? 'selected' : '' }}>Dikonfirmasi</option>
                <option value="completed" {{ request('status') === 'completed' ? 'selected' : '' }}>Selesai</option>
                <option value="cancelled" {{ request('status') === 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
            </select>
        </form>
    </div>

    <div class="overflow-x-auto rounded border border-hairline bg-surface">
        <table class="w-full text-left text-[13px]">
            <thead>
                <tr class="border-b border-hairline text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">
                    <th class="p-4">Nama</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Telepon</th>
                    <th class="p-4">Model</th>
                    <th class="p-4">Tanggal Diinginkan</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Diajukan</th>
                    <th class="p-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-hairline">
                @forelse($testDrives as $td)
                    <tr class="transition-colors hover:bg-surface-elevated">
                        <td class="p-4 font-medium text-ink">{{ $td->nama }}</td>
                        <td class="p-4 text-body">{{ $td->email }}</td>
                        <td class="p-4 text-body">{{ $td->phone }}</td>
                        <td class="p-4 text-body">{{ $td->model }}</td>
                        <td class="p-4 text-muted">{{ $td->preferred_date?->format('d M Y') ?? '-' }}</td>
                        <td class="p-4"><x-badge :status="$td->status" /></td>
                        <td class="p-4 text-muted">{{ $td->created_at->format('d M Y') }}</td>
                        <td class="p-4">
                            <form method="POST" action="{{ route('admin.test-drives.status', $td) }}" class="flex items-center justify-end gap-2">
                                @csrf
                                @method('PATCH')
                                <select name="status" onchange="this.form.submit()" class="text-input h-8 w-auto !text-[12px] !px-2">
                                    <option value="pending" {{ $td->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="confirmed" {{ $td->status === 'confirmed' ? 'selected' : '' }}>Dikonfirmasi</option>
                                    <option value="completed" {{ $td->status === 'completed' ? 'selected' : '' }}>Selesai</option>
                                    <option value="cancelled" {{ $td->status === 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
                                </select>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="p-8 text-center text-muted">Belum ada permintaan test drive.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $testDrives->links() }}
    </div>
</x-layout.admin>
