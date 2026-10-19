<x-layout.admin title="Detail Pesanan #{{ $order->id }}">
    <div class="mx-auto max-w-4xl space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-[13px] text-muted">Pesanan #{{ $order->id }}</p>
                <p class="text-[12px] text-muted-soft">{{ $order->created_at->format('d M Y H:i') }}</p>
            </div>
            <x-badge :status="$order->status" />
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div class="rounded border border-hairline bg-surface p-6">
                <h3 class="mb-4 text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Informasi Pelanggan</h3>
                <div class="space-y-3 text-[13px]">
                    <div class="flex justify-between">
                        <span class="text-muted">Nama</span>
                        <span class="text-ink">{{ $order->full_name ?? $order->user->name ?? '-' }}</span>
                    </div>
                    <div class="border-t border-hairline"></div>
                    <div class="flex justify-between">
                        <span class="text-muted">Email</span>
                        <span class="text-ink">{{ $order->email ?? $order->user->email ?? '-' }}</span>
                    </div>
                    <div class="border-t border-hairline"></div>
                    <div class="flex justify-between">
                        <span class="text-muted">Telepon</span>
                        <span class="text-ink">{{ $order->phone ?? '-' }}</span>
                    </div>
                </div>
            </div>

            <div class="rounded border border-hairline bg-surface p-6">
                <h3 class="mb-4 text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Informasi Mobil</h3>
                @if($order->car)
                    <div class="flex items-center gap-4">
                        @if($order->car->image)
                            <img src="{{ asset('storage/' . $order->car->image) }}" alt="{{ $order->car->name }}" class="h-16 w-16 rounded object-cover">
                        @endif
                        <div>
                            <p class="font-medium text-ink">{{ $order->car->name }}</p>
                            <p class="text-[13px] text-muted">{{ $order->car->price }}</p>
                        </div>
                    </div>
                @else
                    <p class="text-[13px] text-muted">Mobil tidak ditemukan.</p>
                @endif
            </div>
        </div>

        <div class="rounded border border-hairline bg-surface p-6">
            <h3 class="mb-4 text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Detail Pesanan</h3>
            <div class="grid grid-cols-1 gap-4 text-[13px] sm:grid-cols-2">
                <div class="flex justify-between">
                    <span class="text-muted">Warna</span>
                    <span class="text-ink">{{ $order->color ?? '-' }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-muted">Metode Pembayaran</span>
                    <span class="text-ink capitalize">{{ $order->payment_method ?? '-' }}</span>
                </div>
                @if($order->payment_method === 'credit')
                    <div class="flex justify-between">
                        <span class="text-muted">Uang Muka</span>
                        <span class="text-ink">Rp {{ number_format($order->down_payment ?? 0, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-muted">Cicilan/Bulan</span>
                        <span class="text-ink">Rp {{ number_format($order->monthly_installment ?? 0, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-muted">Tenor</span>
                        <span class="text-ink">{{ $order->tenor ?? '-' }} bulan</span>
                    </div>
                @endif
            </div>
            @if($order->shipping_address)
                <div class="mt-4 border-t border-hairline pt-4">
                    <p class="mb-1 text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">Alamat Pengiriman</p>
                    <p class="text-[13px] text-body">{{ $order->shipping_address }}</p>
                    @if($order->shipping_city || $order->shipping_province)
                        <p class="text-[13px] text-muted">{{ $order->shipping_city }}, {{ $order->shipping_province }} {{ $order->shipping_postal_code }}</p>
                    @endif
                </div>
            @endif
            @if($order->notes)
                <div class="mt-4 border-t border-hairline pt-4">
                    <p class="mb-1 text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">Catatan</p>
                    <p class="text-[13px] text-body">{{ $order->notes }}</p>
                </div>
            @endif
        </div>

        <div class="rounded border border-hairline bg-surface p-6">
            <h3 class="mb-4 text-[14px] font-bold uppercase tracking-[1.5px] text-ink">Update Status</h3>
            <form method="POST" action="{{ route('admin.orders.status', $order) }}" class="flex flex-col gap-4 sm:flex-row sm:items-end">
                @csrf
                @method('PATCH')
                <div class="flex-1">
                    <label for="status" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Status</label>
                    <select id="status" name="status" required class="text-input w-full @error('status') border-m-red @enderror">
                        <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="confirmed" {{ $order->status === 'confirmed' ? 'selected' : '' }}>Dikonfirmasi</option>
                        <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Diproses</option>
                        <option value="delivered" {{ $order->status === 'delivered' ? 'selected' : '' }}>Dikirim</option>
                        <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
                    </select>
                    @error('status')
                        <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                    @enderror
                </div>
                <x-button type="submit">Perbarui Status</x-button>
            </form>
        </div>

        <div class="flex gap-3">
            <x-button href="{{ route('admin.orders.index') }}" variant="secondary">Kembali ke Daftar</x-button>
        </div>
    </div>
</x-layout.admin>
