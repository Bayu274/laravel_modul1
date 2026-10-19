<x-layout.admin title="Tambah Promo">
    <div class="mx-auto max-w-2xl">
        <form method="POST" action="{{ route('admin.promos.store') }}" class="space-y-6">
            @csrf

            <x-input name="title" label="Judul Promo" placeholder="Contoh: Promo Akhir Tahun" required />

            <div>
                <label for="description" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Deskripsi</label>
                <textarea
                    id="description"
                    name="description"
                    placeholder="Deskripsi detail promo..."
                    rows="3"
                    class="text-input w-full @error('description') border-m-red @enderror"
                >{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div>
                    <label for="discount_type" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">
                        Tipe Diskon <span class="text-m-red">*</span>
                    </label>
                    <select id="discount_type" name="discount_type" required class="text-input w-full @error('discount_type') border-m-red @enderror">
                        <option value="percentage" {{ old('discount_type') === 'percentage' ? 'selected' : '' }}>Persen (%)</option>
                        <option value="fixed" {{ old('discount_type') === 'fixed' ? 'selected' : '' }}>Nominal (Rp)</option>
                    </select>
                    @error('discount_type')
                        <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                    @enderror
                </div>
                <x-input name="discount_value" label="Nilai Diskon" type="number" placeholder="Contoh: 10" required />
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <x-input name="promo_code" label="Kode Promo" placeholder="Contoh: AKHIRTAHUN10" />
                <x-input name="image" label="Gambar" placeholder="Path gambar promo" />
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div>
                    <label for="starts_at" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Tanggal Mulai</label>
                    <input
                        type="datetime-local"
                        id="starts_at"
                        name="starts_at"
                        value="{{ old('starts_at') }}"
                        class="text-input w-full @error('starts_at') border-m-red @enderror"
                    >
                    @error('starts_at')
                        <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="expires_at" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Tanggal Berakhir</label>
                    <input
                        type="datetime-local"
                        id="expires_at"
                        name="expires_at"
                        value="{{ old('expires_at') }}"
                        class="text-input w-full @error('expires_at') border-m-red @enderror"
                    >
                    @error('expires_at')
                        <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <label class="flex items-center gap-3">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} class="h-4 w-4 rounded border-hairline-strong bg-surface text-primary focus:ring-primary">
                <span class="text-[13px] text-body">Aktifkan Promo</span>
            </label>

            <div>
                <label class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Mobil (Opsional)</label>
                <select name="cars[]" multiple class="text-input w-full @error('cars') border-m-red @enderror" size="4">
                    @foreach($cars as $id => $name)
                        <option value="{{ $id }}" {{ in_array($id, old('cars', [])) ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
                <p class="mt-1 text-[12px] font-light text-muted">Kosongkan untuk promo berlaku umum. Tahan Ctrl/Cmd untuk memilih beberapa mobil.</p>
                @error('cars')
                    <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3 pt-4">
                <x-button type="submit">Simpan Promo</x-button>
                <x-button href="{{ route('admin.promos.index') }}" variant="secondary">Batal</x-button>
            </div>
        </form>
    </div>
</x-layout.admin>
