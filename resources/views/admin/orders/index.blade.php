<x-layout.admin title="Daftar Pesanan">
    <x-button href="{{ route('admin.dashboard') }}" variant="secondary" class="mb-4">Kembali ke Dashboard</x-button>

    <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <p class="text-[13px] text-muted">{{ $orders->total() }} pesanan ditemukan</p>
        <form method="GET" action="{{ route('admin.orders.index') }}" class="flex items-center gap-3">
            <select name="status" onchange="this.form.submit()" class="text-input h-10 w-auto !text-[13px]">
                <option value="">Semua Status</option>
                <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="confirmed" {{ request('status') === 'confirmed' ? 'selected' : '' }}>Dikonfirmasi</option>
                <option value="processing" {{ request('status') === 'processing' ? 'selected' : '' }}>Diproses</option>
                <option value="delivered" {{ request('status') === 'delivered' ? 'selected' : '' }}>Dikirim</option>
                <option value="cancelled" {{ request('status') === 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
            </select>
        </form>
    </div>

    <div class="overflow-x-auto rounded border border-hairline bg-surface">
        <table class="w-full text-left text-[13px]">
            <thead>
                <tr class="border-b border-hairline text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">
                    <th class="p-4">ID</th>
                    <th class="p-4">Pelanggan</th>
                    <th class="p-4">Mobil</th>
                    <th class="p-4">Pembayaran</th>
                    <th class="p-4">Total</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Tanggal</th>
                    <th class="p-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-hairline">
                @forelse($orders as $order)
                    <tr class="transition-colors hover:bg-surface-elevated">
                        <td class="p-4 font-medium text-ink">#{{ $order->id }}</td>
                        <td class="p-4 text-body">{{ $order->user->name ?? '-' }}</td>
                        <td class="p-4 text-body">{{ $order->car->name ?? '-' }}</td>
                        <td class="p-4 text-muted">{{ ucfirst($order->payment_method ?? '-') }}</td>
                        <td class="p-4 font-medium text-ink">Rp {{ number_format($order->car->price_numeric ?? 0, 0, ',', '.') }}</td>
                        <td class="p-4"><x-badge :status="$order->status" /></td>
                        <td class="p-4 text-muted">{{ $order->created_at->format('d M Y') }}</td>
                        <td class="p-4">
                            <div class="flex items-center justify-end">
                                <x-button href="{{ route('admin.orders.show', $order) }}" variant="secondary">Detail</x-button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="p-8 text-center text-muted">Belum ada pesanan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $orders->links() }}
    </div>
</x-layout.admin>
