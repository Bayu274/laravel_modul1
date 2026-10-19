<x-layout.admin title="Tambah Berita">
    <div class="mx-auto max-w-2xl">
        <form method="POST" action="{{ route('admin.news.store') }}" class="space-y-6">
            @csrf

            <x-input name="title" label="Judul" placeholder="Judul berita" required />

            <div>
                <label for="excerpt" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Ringkasan</label>
                <textarea
                    id="excerpt"
                    name="excerpt"
                    placeholder="Ringkasan singkat berita..."
                    rows="3"
                    class="text-input w-full @error('excerpt') border-m-red @enderror"
                >{{ old('excerpt') }}</textarea>
                @error('excerpt')
                    <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="content" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">
                    Konten <span class="text-m-red">*</span>
                </label>
                <textarea
                    id="content"
                    name="content"
                    placeholder="Tulis konten berita di sini..."
                    rows="10"
                    required
                    class="text-input w-full @error('content') border-m-red @enderror"
                >{{ old('content') }}</textarea>
                @error('content')
                    <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                @enderror
            </div>

            <x-input name="image" label="Gambar" placeholder="Path gambar (contoh: images/berita/launch.jpg)" />

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div>
                    <label for="published_at" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Tanggal Terbit</label>
                    <input
                        type="datetime-local"
                        id="published_at"
                        name="published_at"
                        value="{{ old('published_at', now()->format('Y-m-d\TH:i')) }}"
                        class="text-input w-full @error('published_at') border-m-red @enderror"
                    >
                    @error('published_at')
                        <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col justify-end gap-4">
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="is_published" value="1" {{ old('is_published') ? 'checked' : '' }} class="h-4 w-4 rounded border-hairline-strong bg-surface text-primary focus:ring-primary">
                        <span class="text-[13px] text-body">Terbitkan</span>
                    </label>
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }} class="h-4 w-4 rounded border-hairline-strong bg-surface text-primary focus:ring-primary">
                        <span class="text-[13px] text-body">Jadikan Unggulan</span>
                    </label>
                </div>
            </div>

            <div class="flex gap-3 pt-4">
                <x-button type="submit">Simpan Berita</x-button>
                <x-button href="{{ route('admin.news.index') }}" variant="secondary">Batal</x-button>
            </div>
        </form>
    </div>
</x-layout.admin>
