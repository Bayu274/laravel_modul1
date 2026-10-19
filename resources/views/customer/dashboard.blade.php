<x-layout.app title="Dashboard Akun">

    <section class="px-6 pt-24 pb-24 lg:px-10">
        <div class="mx-auto max-w-[1440px]">
            <div class="reveal mb-10">
                <h1 class="text-[36px] font-bold leading-[1.1] text-ink lg:text-[48px]">Halo, {{ Auth::user()->name }}</h1>
                <p class="mt-3 text-[16px] font-light leading-[1.55] text-muted">
                    Selamat datang kembali di akun NOVARA Motors Anda.
                </p>
            </div>

            <x-alert />

            <div class="reveal grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-4">
                <stat-card title="Total Pesanan" value="{{ Auth::user()->orders()->count() }}" subtitle="Pesanan aktif" />
                <stat-card title="Test Drive" value="{{ Auth::user()->testDriveRequests()->count() }}" subtitle="Permintaan terkirim" />
            </div>

            <div class="mt-10 reveal">
                <div class="flex items-center justify-between">
                    <h2 class="text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Pesanan Terbaru</h2>
                    <a href="{{ route('customer.orders') }}" class="text-[13px] font-bold uppercase tracking-[1.5px] text-primary transition-colors hover:text-primary-hover">Lihat Semua</a>
                </div>

                @if($recentOrders->count() > 0)
                    <div class="mt-4 overflow-x-auto rounded border border-hairline bg-surface">
                        <table class="w-full text-left text-[13px]">
                            <thead>
                                <tr class="border-b border-hairline text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">
                                    <th class="p-4">Mobil</th>
                                    <th class="p-4">Harga</th>
                                    <th class="p-4">Status</th>
                                    <th class="p-4">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-hairline">
                                @foreach($recentOrders as $order)
                                    <tr class="transition-colors hover:bg-surface-elevated">
                                        <td class="p-4 font-medium text-ink">{{ $order->car->name ?? '-' }}</td>
                                        <td class="p-4 text-body">Rp {{ number_format($order->car->price_numeric ?? 0, 0, ',', '.') }}</td>
                                        <td class="p-4"><x-badge :status="$order->status" /></td>
                                        <td class="p-4 text-muted">{{ $order->created_at->format('d M Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="mt-4 rounded border border-hairline bg-surface p-12 text-center">
                        <p class="text-[15px] text-muted">Belum ada pesanan.</p>
                        <a href="{{ route('cars.index') }}" class="btn-primary mt-6 inline-flex">Jelajahi Katalog</a>
                    </div>
                @endif
            </div>

            <div class="mt-10 reveal">
                <h2 class="text-[14px] font-bold uppercase tracking-[1.5px] text-ink mb-4">Akses Cepat</h2>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <a href="{{ route('customer.orders') }}" class="glow-card flex items-center gap-4 p-5 transition-all duration-300">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded bg-primary/10 text-primary">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                        </div>
                        <div>
                            <p class="text-[14px] font-bold text-ink">Riwayat Pesanan</p>
                            <p class="text-[13px] text-muted">Lihat semua pesanan Anda</p>
                        </div>
                    </a>

                    <a href="{{ route('customer.profile') }}" class="glow-card flex items-center gap-4 p-5 transition-all duration-300">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded bg-primary/10 text-primary">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                        <div>
                            <p class="text-[14px] font-bold text-ink">Edit Profil</p>
                            <p class="text-[13px] text-muted">Perbarui data diri Anda</p>
                        </div>
                    </a>

                    <a href="{{ route('test-drive.create') }}" class="glow-card flex items-center gap-4 p-5 transition-all duration-300">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded bg-primary/10 text-primary">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        </div>
                        <div>
                            <p class="text-[14px] font-bold text-ink">Jadwalkan Test Drive</p>
                            <p class="text-[13px] text-muted">Coba langsung mobil impian</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-layout.app>
