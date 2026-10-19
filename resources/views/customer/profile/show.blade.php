<x-layout.app title="Profil Saya">

    <section class="px-6 pt-24 pb-24 lg:px-10">
        <div class="reveal mx-auto max-w-[640px]">
            <div class="mb-10">
                <h1 class="text-[36px] font-bold leading-[1.1] text-ink lg:text-[48px]">Profil Saya</h1>
                <p class="mt-3 text-[16px] font-light leading-[1.55] text-muted">
                    Kelola informasi akun Anda.
                </p>
            </div>

            <x-alert />

            <div class="rounded border border-hairline bg-surface p-6">
                <div class="space-y-5">
                    <div>
                        <p class="text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">Nama</p>
                        <p class="mt-1 text-[15px] text-ink">{{ $user->name }}</p>
                    </div>
                    <div class="border-t border-hairline"></div>
                    <div>
                        <p class="text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">Email</p>
                        <p class="mt-1 text-[15px] text-ink">{{ $user->email }}</p>
                    </div>
                    <div class="border-t border-hairline"></div>
                    <div>
                        <p class="text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">No. Telepon</p>
                        <p class="mt-1 text-[15px] text-ink">{{ $user->phone ?? '-' }}</p>
                    </div>
                    <div class="border-t border-hairline"></div>
                    <div>
                        <p class="text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">Alamat</p>
                        <p class="mt-1 text-[15px] text-ink">{{ $user->address ?? '-' }}</p>
                    </div>
                    <div class="border-t border-hairline"></div>
                    <div class="grid grid-cols-2 gap-5">
                        <div>
                            <p class="text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">Kota</p>
                            <p class="mt-1 text-[15px] text-ink">{{ $user->city ?? '-' }}</p>
                        </div>
                        <div>
                            <p class="text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">Provinsi</p>
                            <p class="mt-1 text-[15px] text-ink">{{ $user->province ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="border-t border-hairline"></div>
                    <div>
                        <p class="text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">Kode Pos</p>
                        <p class="mt-1 text-[15px] text-ink">{{ $user->postal_code ?? '-' }}</p>
                    </div>
                    <div class="border-t border-hairline"></div>
                    <div>
                        <p class="text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">Role</p>
                        <p class="mt-1 text-[15px] text-ink capitalize">{{ $user->role }}</p>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <x-button href="{{ route('customer.profile.edit') }}" variant="primary">Edit Profil</x-button>
            </div>
        </div>
    </section>

</x-layout.app>
