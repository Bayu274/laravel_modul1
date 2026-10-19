<x-layout.admin title="Tambah Pengguna">
    <div class="mx-auto max-w-lg">
        <form method="POST" action="{{ route('admin.users.store') }}" class="space-y-6">
            @csrf

            <x-input name="name" label="Nama Lengkap" placeholder="Contoh: Ahmad Rizki" required />

            <x-input name="email" label="Email" type="email" placeholder="contoh@novara.com" required />

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <x-input name="password" label="Password" type="password" placeholder="Minimal 8 karakter" required />
                <x-input name="password_confirmation" label="Konfirmasi Password" type="password" placeholder="Ulangi password" required />
            </div>

            <div>
                <label for="role" class="mb-1.5 block text-[13px] font-bold uppercase tracking-[1.5px] text-ink">
                    Role <span class="text-m-red">*</span>
                </label>
                <select id="role" name="role" required class="text-input w-full @error('role') border-m-red @enderror">
                    <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="customer" {{ old('role') === 'customer' ? 'selected' : '' }}>Pelanggan</option>
                </select>
                @error('role')
                    <p class="mt-1 text-[12px] font-light text-m-red">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3 pt-4">
                <x-button type="submit">Simpan Pengguna</x-button>
                <x-button href="{{ route('admin.users.index') }}" variant="secondary">Batal</x-button>
            </div>
        </form>
    </div>
</x-layout.admin>
