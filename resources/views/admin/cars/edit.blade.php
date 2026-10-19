<x-layout.admin title="Edit Mobil: {{ $car->name }}">
    <div class="mx-auto max-w-2xl">
        <form method="POST" action="{{ route('admin.cars.update', $car) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <x-input name="name" label="Nama Mobil" :value="$car->name" placeholder="Contoh: BMW M4 Competition" required />

            <x-input name="slug" label="Slug" :value="$car->slug" placeholder="Contoh: bmw-m4-competition" required />

            <x-input name="tagline" label="Tagline" :value="$car->tagline" placeholder="Contoh: Performa Tanpa Kompromi" required />

            <x-input name="subtitle" label="Subjudul" :value="$car->subtitle" placeholder="Deskripsi singkat mobil" required />

            <div>
                <label for="description" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">
                    Deskripsi <span class="text-m-red">*</span>
                </label>
                <textarea
                    id="description"
                    name="description"
                    placeholder="Deskripsi lengkap tentang mobil ini..."
                    required
                    rows="6"
                    class="text-input w-full @error('description') border-m-red @enderror"
                >{{ old('description', $car->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <x-input name="price" label="Harga Tampil" :value="$car->price" placeholder="Contoh: Rp 1.500.000.000" required />
                <x-input name="price_numeric" label="Harga (Angka)" type="number" :value="$car->price_numeric" placeholder="1500000000" required />
            </div>

            <x-input name="image" label="Gambar" :value="$car->image" placeholder="Path gambar (contoh: images/mobil/bmw-m4.jpg)" required />

            <x-input name="color" label="Warna" type="color" :value="$car->color" required />

            <div>
                <label for="status" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">
                    Status <span class="text-m-red">*</span>
                </label>
                <select id="status" name="status" required class="text-input w-full @error('status') border-m-red @enderror">
                    <option value="available" {{ old('status', $car->status) === 'available' ? 'selected' : '' }}>Tersedia</option>
                    <option value="sold" {{ old('status', $car->status) === 'sold' ? 'selected' : '' }}>Terjual</option>
                    <option value="reserved" {{ old('status', $car->status) === 'reserved' ? 'selected' : '' }}>Dipesan</option>
                </select>
                @error('status')
                    <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">
                    Kategori <span class="text-m-red">*</span>
                </label>
                <select name="categories[]" multiple required class="text-input w-full @error('categories') border-m-red @enderror" size="4">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ in_array($category->id, old('categories', $car->categories->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                <p class="mt-1 text-[12px] font-light text-muted">Tahan Ctrl/Cmd untuk memilih beberapa kategori.</p>
                @error('categories')
                    <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3 pt-4">
                <x-button type="submit">Perbarui Mobil</x-button>
                <x-button href="{{ route('admin.cars.index') }}" variant="secondary">Batal</x-button>
            </div>
        </form>
    </div>
</x-layout.admin>
