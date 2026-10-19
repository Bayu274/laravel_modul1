<x-layout.admin title="Edit Kategori: {{ $category->name }}">
    <div class="mx-auto max-w-lg">
        <form method="POST" action="{{ route('admin.categories.update', $category) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <x-input name="name" label="Nama Kategori" :value="$category->name" placeholder="Contoh: SUV Mewah" required />

            <div>
                <label for="slug-preview" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Slug</label>
                <input type="text" id="slug-preview" readonly value="{{ $category->slug }}" class="text-input w-full bg-surface-elevated text-muted">
                <p class="mt-1 text-[12px] font-light text-muted">Slug akan diperbarui otomatis dari nama kategori.</p>
            </div>

            <div>
                <label for="description" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Deskripsi</label>
                <textarea
                    id="description"
                    name="description"
                    placeholder="Deskripsi singkat kategori ini..."
                    rows="3"
                    class="text-input w-full @error('description') border-m-red @enderror"
                >{{ old('description', $category->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3 pt-4">
                <x-button type="submit">Perbarui Kategori</x-button>
                <x-button href="{{ route('admin.categories.index') }}" variant="secondary">Batal</x-button>
            </div>
        </form>
    </div>

    <script>
        const nameInput = document.querySelector('input[name="name"]');
        const slugPreview = document.getElementById('slug-preview');
        nameInput?.addEventListener('input', function() {
            slugPreview.value = this.value.toLowerCase()
                .replace(/[^\w\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .trim();
        });
    </script>
</x-layout.admin>
