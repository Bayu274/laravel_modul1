<x-layout.admin title="Daftar Promo">
        <x-button href="{{ route('admin.dashboard') }}" variant="secondary" class="mb-4">Kembali ke Dashboard</x-button>

    <div class="mb-6 flex items-center justify-between">
        <p class="text-[13px] text-muted">{{ $promos->total() }} promo ditemukan</p>
        <x-button href="{{ route('admin.promos.create') }}">Tambah Promo</x-button>
    </div>

    <div class="overflow-x-auto rounded border border-hairline bg-surface">
        <table class="w-full text-left text-[13px]">
            <thead>
                <tr class="border-b border-hairline text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">
                    <th class="p-4">Judul</th>
                    <th class="p-4">Diskon</th>
                    <th class="p-4">Kode</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Mobil</th>
                    <th class="p-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-hairline">
                @forelse($promos as $promo)
                    <tr class="transition-colors hover:bg-surface-elevated">
                        <td class="p-4">
                            <div>
                                <p class="font-medium text-ink">{{ $promo->title }}</p>
                                @if($promo->description)
                                    <p class="text-[12px] text-muted">{{ Str::limit($promo->description, 50) }}</p>
                                @endif
                            </div>
                        </td>
                        <td class="p-4">
                            @if($promo->discount_type === 'percentage')
                                <span class="font-medium text-green-400">{{ $promo->discount_value }}%</span>
                            @else
                                <span class="font-medium text-green-400">Rp {{ number_format($promo->discount_value, 0, ',', '.') }}</span>
                            @endif
                        </td>
                        <td class="p-4">
                            @if($promo->promo_code)
                                <code class="rounded bg-surface-elevated px-2 py-0.5 text-[12px] text-primary">{{ $promo->promo_code }}</code>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td class="p-4">
                            @if($promo->is_active)
                                <span class="inline-flex items-center rounded border border-green-500/30 bg-green-500/15 px-2.5 py-0.5 text-[12px] font-medium text-green-400">Aktif</span>
                            @else
                                <span class="inline-flex items-center rounded border border-gray-500/30 bg-gray-500/15 px-2.5 py-0.5 text-[12px] font-medium text-gray-400">Nonaktif</span>
                            @endif
                        </td>
                        <td class="p-4">
                            @if($promo->cars->count() > 0)
                                <div class="flex flex-wrap gap-1">
                                    @foreach($promo->cars->take(2) as $car)
                                        <span class="inline-flex items-center rounded bg-surface-elevated px-2 py-0.5 text-[11px] text-muted">{{ $car->name }}</span>
                                    @endforeach
                                    @if($promo->cars->count() > 2)
                                        <span class="text-[11px] text-muted">+{{ $promo->cars->count() - 2 }}</span>
                                    @endif
                                </div>
                            @else
                                <span class="text-muted">Semua mobil</span>
                            @endif
                        </td>
                        <td class="p-4">
                            <div class="flex items-center justify-end gap-2">
                                <x-button href="{{ route('admin.promos.edit', $promo) }}" variant="secondary">Edit</x-button>
                                <x-button
                                    onclick="document.getElementById('modal-promo-{{ $promo->id }}').classList.remove('hidden'); document.getElementById('modal-promo-{{ $promo->id }}').classList.add('flex');"
                                    variant="danger"
                                >Hapus</x-button>
                                <x-modal id="modal-promo-{{ $promo->id }}" title="Hapus Promo" message="Apakah kamu yakin ingin menghapus promo ini?">
                                    <form method="POST" action="{{ route('admin.promos.destroy', $promo) }}" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <x-button type="submit" variant="danger">Ya, Hapus</x-button>
                                    </form>
                                </x-modal>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-8 text-center text-muted">Belum ada promo.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $promos->links() }}
    </div>
</x-layout.admin>
