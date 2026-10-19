<x-layout.app title="Edit Profil">

    <section class="px-6 pt-24 pb-24 lg:px-10">
        <div class="reveal mx-auto max-w-[560px]">
            <div class="mb-10">
                <h1 class="text-[36px] font-bold leading-[1.1] text-ink lg:text-[48px]">Edit Profil</h1>
                <p class="mt-3 text-[16px] font-light leading-[1.55] text-muted">
                    Perbarui informasi akun Anda.
                </p>
            </div>

            <x-alert />

            <form class="flex flex-col gap-4" action="{{ route('customer.profile.update') }}" method="POST">
                @csrf
                @method('PUT')

                <x-input name="name" label="Nama Lengkap" placeholder="Nama lengkap" :required="true" :value="old('name', $user->name)" />
                <x-input name="phone" label="No. Telepon" placeholder="08xxxxxxxxxx" :required="true" :value="old('phone', $user->phone)" />
                <x-textarea name="address" label="Alamat" placeholder="Alamat lengkap" :required="true">{{ old('address', $user->address) }}</x-textarea>
                <x-input name="city" label="Kota" placeholder="Nama kota" :required="true" :value="old('city', $user->city)" />
                <x-input name="province" label="Provinsi" placeholder="Nama provinsi" :required="true" :value="old('province', $user->province)" />
                <x-input name="postal_code" label="Kode Pos" placeholder="12345" :required="true" :value="old('postal_code', $user->postal_code)" />
                <x-input name="id_card_number" label="No. KTP" placeholder="Nomor KTP (opsional)" :value="old('id_card_number', $user->id_card_number)" />

                <div class="mt-2 flex gap-4">
                    <x-button type="submit" variant="primary">Simpan Perubahan</x-button>
                    <x-button href="{{ route('customer.profile') }}" variant="secondary">Batal</x-button>
                </div>
            </form>
        </div>
    </section>

</x-layout.app>
