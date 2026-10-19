<x-layout.admin title="Daftar Berita">
        <x-button href="{{ route('admin.dashboard') }}" variant="secondary" class="mb-4">Kembali ke Dashboard</x-button>

    <div class="mb-6 flex items-center justify-between">
        <p class="text-[13px] text-muted">{{ $news->total() }} berita ditemukan</p>
        <x-button href="{{ route('admin.news.create') }}">Tambah Berita</x-button>
    </div>

    <div class="overflow-x-auto rounded border border-hairline bg-surface">
        <table class="w-full text-left text-[13px]">
            <thead>
                <tr class="border-b border-hairline text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">
                    <th class="p-4">Judul</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Unggulan</th>
                    <th class="p-4">Tanggal Terbit</th>
                    <th class="p-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-hairline">
                @forelse($news as $item)
                    <tr class="transition-colors hover:bg-surface-elevated">
                        <td class="p-4">
                            <div>
                                <p class="font-medium text-ink">{{ $item->title }}</p>
                                @if($item->excerpt)
                                    <p class="text-[12px] text-muted">{{ Str::limit($item->excerpt, 60) }}</p>
                                @endif
                            </div>
                        </td>
                        <td class="p-4">
                            @if($item->is_published)
                                <span class="inline-flex items-center rounded border border-green-500/30 bg-green-500/15 px-2.5 py-0.5 text-[12px] font-medium text-green-400">Terbit</span>
                            @else
                                <span class="inline-flex items-center rounded border border-yellow-500/30 bg-yellow-500/15 px-2.5 py-0.5 text-[12px] font-medium text-yellow-400">Draft</span>
                            @endif
                        </td>
                        <td class="p-4">
                            @if($item->is_featured)
                                <span class="inline-flex items-center rounded border border-blue-500/30 bg-blue-500/15 px-2.5 py-0.5 text-[12px] font-medium text-blue-400">Unggulan</span>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td class="p-4 text-muted">{{ $item->published_at ? $item->published_at->format('d M Y H:i') : '-' }}</td>
                        <td class="p-4">
                            <div class="flex items-center justify-end gap-2">
                                <x-button href="{{ route('admin.news.edit', $item) }}" variant="secondary">Edit</x-button>
                                <x-button
                                    onclick="document.getElementById('modal-news-{{ $item->id }}').classList.remove('hidden'); document.getElementById('modal-news-{{ $item->id }}').classList.add('flex');"
                                    variant="danger"
                                >Hapus</x-button>
                                <x-modal id="modal-news-{{ $item->id }}" title="Hapus Berita" message="Apakah kamu yakin ingin menghapus berita ini?">
                                    <form method="POST" action="{{ route('admin.news.destroy', $item) }}" class="inline">
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
                        <td colspan="5" class="p-8 text-center text-muted">Belum ada berita.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $news->links() }}
    </div>
</x-layout.admin>
