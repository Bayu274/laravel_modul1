<x-layout.admin title="Tambah Mobil">
    <div class="mx-auto max-w-2xl">
        <form method="POST" action="{{ route('admin.cars.store') }}" class="space-y-6">
            @csrf

            <x-input name="name" label="Nama Mobil" placeholder="Contoh: BMW M4 Competition" required />

            <x-input name="slug" label="Slug" placeholder="Contoh: bmw-m4-competition" required />

            <x-input name="tagline" label="Tagline" placeholder="Contoh: Performa Tanpa Kompromi" required />

            <x-input name="subtitle" label="Subjudul" placeholder="Deskripsi singkat mobil" required />

            <x-textarea name="description" label="Deskripsi" placeholder="Deskripsi lengkap tentang mobil ini..." required />

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <x-input name="price" label="Harga Tampil" placeholder="Contoh: Rp 1.500.000.000" required />
                <x-input name="price_numeric" label="Harga (Angka)" type="number" placeholder="1500000000" required />
            </div>

            <x-input name="image" label="Gambar" placeholder="Path gambar (contoh: images/mobil/bmw-m4.jpg)" required />

            <x-input name="color" label="Warna" type="color" value="#1c69d4" required />

            <div>
                <label class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">
                    Kategori <span class="text-m-red">*</span>
                </label>
                <select name="categories[]" multiple required class="text-input w-full @error('categories') border-m-red @enderror" size="4">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ in_array($category->id, old('categories', [])) ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                <p class="mt-1 text-[12px] font-light text-muted">Tahan Ctrl/Cmd untuk memilih beberapa kategori.</p>
                @error('categories')
                    <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3 pt-4">
                <x-button type="submit">Simpan Mobil</x-button>
                <x-button href="{{ route('admin.cars.index') }}" variant="secondary">Batal</x-button>
            </div>
        </form>
    </div>
</x-layout.admin>
