<x-layout.admin title="Daftar Kategori">
        <x-button href="{{ route('admin.dashboard') }}" variant="secondary" class="mb-4">Kembali ke Dashboard</x-button>

    <div class="mb-6 flex items-center justify-between">
        <p class="text-[13px] text-muted">{{ $categories->total() }} kategori ditemukan</p>
        <x-button href="{{ route('admin.categories.create') }}">Tambah Kategori</x-button>
    </div>

    <div class="overflow-x-auto rounded border border-hairline bg-surface">
        <table class="w-full text-left text-[13px]">
            <thead>
                <tr class="border-b border-hairline text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">
                    <th class="p-4">Nama</th>
                    <th class="p-4">Slug</th>
                    <th class="p-4">Jumlah Mobil</th>
                    <th class="p-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-hairline">
                @forelse($categories as $category)
                    <tr class="transition-colors hover:bg-surface-elevated">
                        <td class="p-4">
                            <p class="font-medium text-ink">{{ $category->name }}</p>
                            @if($category->description)
                                <p class="text-[12px] text-muted">{{ Str::limit($category->description, 60) }}</p>
                            @endif
                        </td>
                        <td class="p-4 text-muted">{{ $category->slug }}</td>
                        <td class="p-4 text-body">{{ $category->cars_count }} mobil</td>
                        <td class="p-4">
                            <div class="flex items-center justify-end gap-2">
                                <x-button href="{{ route('admin.categories.edit', $category) }}" variant="secondary">Edit</x-button>
                                <x-button
                                    onclick="document.getElementById('modal-cat-{{ $category->id }}').classList.remove('hidden'); document.getElementById('modal-cat-{{ $category->id }}').classList.add('flex');"
                                    variant="danger"
                                >Hapus</x-button>
                                <x-modal id="modal-cat-{{ $category->id }}" title="Hapus Kategori" message="Apakah kamu yakin ingin menghapus kategori {{ $category->name }}?">
                                    <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" class="inline">
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
                        <td colspan="4" class="p-8 text-center text-muted">Belum ada kategori.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $categories->links() }}
    </div>
</x-layout.admin>
