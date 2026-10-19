<x-layout.app title="Riwayat Pesanan">

    <section class="px-6 pt-24 pb-24 lg:px-10">
        <div class="mx-auto max-w-[1440px]">
            <div class="reveal mb-10">
                <h1 class="text-[36px] font-bold leading-[1.1] text-ink lg:text-[48px]">Riwayat Pesanan</h1>
                <p class="mt-3 text-[16px] font-light leading-[1.55] text-muted">
                    Pantau status semua pesanan Anda di sini.
                </p>
            </div>

            <x-alert />

            <div class="reveal overflow-x-auto rounded border border-hairline bg-surface">
                <table class="w-full text-left text-[13px]">
                    <thead>
                        <tr class="border-b border-hairline text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">
                            <th class="p-4">Order ID</th>
                            <th class="p-4">Mobil</th>
                            <th class="p-4">Warna</th>
                            <th class="p-4">Metode Pembayaran</th>
                            <th class="p-4">Status</th>
                            <th class="p-4">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-hairline">
                        @forelse($orders as $order)
                            <tr class="transition-colors hover:bg-surface-elevated">
                                <td class="p-4 font-medium text-ink">#{{ $order->id }}</td>
                                <td class="p-4 text-body">{{ $order->car->name ?? '-' }}</td>
                                <td class="p-4 text-body">{{ $order->color ?? '-' }}</td>
                                <td class="p-4 text-muted">{{ ucfirst($order->payment_method ?? '-') }}</td>
                                <td class="p-4"><x-badge :status="$order->status" /></td>
                                <td class="p-4 text-muted">{{ $order->created_at->format('d M Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="p-12 text-center text-muted">
                                    <p class="text-[15px]">Belum ada riwayat pesanan.</p>
                                    <a href="{{ route('cars.index') }}" class="btn-primary mt-6 inline-flex">Jelajahi Katalog</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $orders->links() }}
            </div>
        </div>
    </section>

</x-layout.app>
