<x-layout.admin title="Dashboard">
    <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <a href="{{ route('admin.cars.index') }}" class="rounded border border-hairline bg-surface p-4 text-center hover:bg-surface-elevated">
            <span class="text-[14px] font-medium text-ink">Kelola Mobil</span>
        </a>
        <a href="{{ route('admin.categories.index') }}" class="rounded border border-hairline bg-surface p-4 text-center hover:bg-surface-elevated">
            <span class="text-[14px] font-medium text-ink">Kelola Kategori</span>
        </a>
        <a href="{{ route('admin.news.index') }}" class="rounded border border-hairline bg-surface p-4 text-center hover:bg-surface-elevated">
            <span class="text-[14px] font-medium text-ink">Kelola Berita</span>
        </a>
        <a href="{{ route('admin.promos.index') }}" class="rounded border border-hairline bg-surface p-4 text-center hover:bg-surface-elevated">
            <span class="text-[14px] font-medium text-ink">Kelola Promo</span>
        </a>
    </div>


    <div class="mt-8 grid grid-cols-1 gap-6 xl:grid-cols-3">
        <div class="rounded border border-hairline bg-surface p-6 xl:col-span-2">
            <h2 class="text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Pendapatan Bulanan</h2>
            <div class="mt-4 h-72">
                <canvas id="revenueChart"></canvas>
            </div>
        </div>

        <div class="rounded border border-hairline bg-surface p-6">
            <h2 class="text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Ringkasan</h2>
            <div class="mt-4 space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-[13px] text-muted">Total Pendapatan</span>
                    <span class="text-[14px] font-medium text-ink">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</span>
                </div>
                <div class="border-t border-hairline"></div>
                <div class="flex items-center justify-between">
                    <span class="text-[13px] text-muted">Pesanan Pending</span>
                    <span class="text-[14px] font-medium text-yellow-400">{{ $pendingOrders }}</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-[13px] text-muted">Pesanan Diproses</span>
                    <span class="text-[14px] font-medium text-m-blue-light">{{ $totalOrders - $pendingOrders }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8 rounded border border-hairline bg-surface p-6">
        <div class="flex items-center justify-between">
            <h2 class="text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Pesanan Terbaru</h2>
            <a href="{{ route('admin.orders.index') }}" class="text-[13px] font-bold uppercase tracking-[1.5px] text-primary transition-colors hover:text-primary-hover">Lihat Semua</a>
        </div>
        <div class="mt-4 overflow-x-auto">
            <table class="w-full text-left text-[13px]">
                <thead>
                    <tr class="border-b border-hairline text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">
                        <th class="pb-3 pr-4">ID</th>
                        <th class="pb-3 pr-4">Pelanggan</th>
                        <th class="pb-3 pr-4">Mobil</th>
                        <th class="pb-3 pr-4">Total</th>
                        <th class="pb-3 pr-4">Status</th>
                        <th class="pb-3">Tanggal</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-hairline">
                    @forelse($recentOrders ?? [] as $order)
                        <tr class="transition-colors hover:bg-surface-elevated">
                            <td class="py-3 pr-4 font-medium text-ink">#{{ $order->id }}</td>
                            <td class="py-3 pr-4 text-body">{{ $order->user->name ?? '-' }}</td>
                            <td class="py-3 pr-4 text-body">{{ $order->car->name ?? '-' }}</td>
                            <td class="py-3 pr-4 font-medium text-ink">Rp {{ number_format($order->car->price_numeric ?? 0, 0, ',', '.') }}</td>
                            <td class="py-3 pr-4"><x-badge :status="$order->status" /></td>
                            <td class="py-3 text-muted">{{ $order->created_at->format('d M Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-8 text-center text-muted">Belum ada pesanan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4"></script>
    <script>
        const ctx = document.getElementById('revenueChart');
        if (ctx) {
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($chartLabels ?? []) !!},
                    datasets: [{
                        label: 'Pendapatan (Rp)',
                        data: {!! json_encode($chartData ?? []) !!},
                        backgroundColor: 'rgba(28, 105, 212, 0.6)',
                        borderColor: 'rgba(28, 105, 212, 1)',
                        borderWidth: 1,
                        borderRadius: 4,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false },
                    },
                    scales: {
                        x: {
                            grid: { color: 'rgba(255,255,255,0.06)' },
                            ticks: { color: '#9aa1ab', font: { size: 12 } },
                        },
                        y: {
                            grid: { color: 'rgba(255,255,255,0.06)' },
                            ticks: {
                                color: '#9aa1ab',
                                font: { size: 12 },
                                callback: function(value) {
                                    return 'Rp ' + value.toLocaleString('id-ID');
                                }
                            },
                        }
                    }
                }
            });
        }
    </script>
</x-layout.admin>
