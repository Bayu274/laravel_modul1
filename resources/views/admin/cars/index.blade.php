    <x-button href="{{ route('admin.dashboard') }}" variant="secondary" class="mb-4">Kembali ke Dashboard</x-button>

    <div class="mb-6 flex items-center justify-between">
        <p class="text-[13px] text-muted">{{ $cars->total() }} mobil ditemukan</p>
        <x-button href="{{ route('admin.cars.create') }}">Tambah Mobil</x-button>
    </div>

    <div class="overflow-x-auto rounded border border-hairline bg-surface">
        <table class="w-full text-left text-[13px]">
            <thead>
                <tr class="border-b border-hairline text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">
                    <th class="p-4">Nama</th>
                    <th class="p-4">Harga</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Kategori</th>
                    <th class="p-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-hairline">
                @forelse($cars as $car)
                    <tr class="transition-colors hover:bg-surface-elevated">
                        <td class="p-4">
                            <div class="flex items-center gap-3">
                                @if($car->image)
                                    <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" class="h-10 w-10 rounded object-cover" loading="lazy">
                                @endif
                                <div>
                                    <p class="font-medium text-ink">{{ $car->name }}</p>
                                    <p class="text-[12px] text-muted">{{ $car->tagline }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-body">{{ $car->price }}</td>
                        <td class="p-4"><x-badge :status="$car->status" /></td>
                        <td class="p-4">
                            <div class="flex flex-wrap gap-1">
                                @foreach($car->categories as $category)
                                    <span class="inline-flex items-center rounded bg-surface-elevated px-2 py-0.5 text-[11px] text-muted">{{ $category->name }}</span>
                                @endforeach
                            </div>
                        </td>
                        <td class="p-4">
                            <div class="flex items-center justify-end gap-2">
                                <x-button href="{{ route('admin.cars.edit', $car) }}" variant="secondary">Edit</x-button>
                                <x-button
                                    onclick="document.getElementById('modal-delete-{{ $car->id }}').classList.remove('hidden'); document.getElementById('modal-delete-{{ $car->id }}').classList.add('flex');"
                                    variant="danger"
                                >Hapus</x-button>
                                <x-modal id="modal-delete-{{ $car->id }}" title="Hapus Mobil" message="Apakah kamu yakin ingin menghapus {{ $car->name }}? Tindakan ini tidak dapat dibatalkan.">
                                    <form method="POST" action="{{ route('admin.cars.destroy', $car) }}" class="inline">
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
                        <td colspan="5" class="p-8 text-center text-muted">Belum ada mobil.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $cars->links() }}
    </div>
</x-layout.admin>
