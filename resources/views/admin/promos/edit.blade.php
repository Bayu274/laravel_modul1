<x-layout.admin title="Edit Promo: {{ $promo->title }}">
    <div class="mx-auto max-w-2xl">
        <form method="POST" action="{{ route('admin.promos.update', $promo) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <x-input name="title" label="Judul Promo" :value="$promo->title" placeholder="Contoh: Promo Akhir Tahun" required />

            <div>
                <label for="description" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Deskripsi</label>
                <textarea
                    id="description"
                    name="description"
                    placeholder="Deskripsi detail promo..."
                    rows="3"
                    class="text-input w-full @error('description') border-m-red @enderror"
                >{{ old('description', $promo->description) }}</textarea>
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
                        <option value="percentage" {{ old('discount_type', $promo->discount_type) === 'percentage' ? 'selected' : '' }}>Persen (%)</option>
                        <option value="fixed" {{ old('discount_type', $promo->discount_type) === 'fixed' ? 'selected' : '' }}>Nominal (Rp)</option>
                    </select>
                    @error('discount_type')
                        <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                    @enderror
                </div>
                <x-input name="discount_value" label="Nilai Diskon" type="number" :value="$promo->discount_value" placeholder="Contoh: 10" required />
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <x-input name="promo_code" label="Kode Promo" :value="$promo->promo_code" placeholder="Contoh: AKHIRTAHUN10" />
                <x-input name="image" label="Gambar" :value="$promo->image" placeholder="Path gambar promo" />
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div>
                    <label for="starts_at" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Tanggal Mulai</label>
                    <input
                        type="datetime-local"
                        id="starts_at"
                        name="starts_at"
                        value="{{ old('starts_at', $promo->starts_at?->format('Y-m-d\TH:i')) }}"
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
                        value="{{ old('expires_at', $promo->expires_at?->format('Y-m-d\TH:i')) }}"
                        class="text-input w-full @error('expires_at') border-m-red @enderror"
                    >
                    @error('expires_at')
                        <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <label class="flex items-center gap-3">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $promo->is_active) ? 'checked' : '' }} class="h-4 w-4 rounded border-hairline-strong bg-surface text-primary focus:ring-primary">
                <span class="text-[13px] text-body">Aktifkan Promo</span>
            </label>

            <div>
                <label class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Mobil (Opsional)</label>
                @php $selectedCars = old('cars', $promo->cars->pluck('id')->toArray()); @endphp
                <select name="cars[]" multiple class="text-input w-full @error('cars') border-m-red @enderror" size="4">
                    @foreach($cars as $id => $name)
                        <option value="{{ $id }}" {{ in_array($id, $selectedCars) ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
                <p class="mt-1 text-[12px] font-light text-muted">Kosongkan untuk promo berlaku umum. Tahan Ctrl/Cmd untuk memilih beberapa mobil.</p>
                @error('cars')
                    <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3 pt-4">
                <x-button type="submit">Perbarui Promo</x-button>
                <x-button href="{{ route('admin.promos.index') }}" variant="secondary">Batal</x-button>
            </div>
        </form>
    </div>
</x-layout.admin>
