<x-layout.app title="Daftar Akun">

    <section class="px-6 pt-24 pb-20 lg:px-10 mt-20">
        <div class="reveal mx-auto max-w-[560px]">
            <h1 class="text-center text-[32px] font-bold text-ink">Daftar Akun</h1>
            <p class="mt-2 text-center text-[15px] font-light text-muted">Buat akun NOVARA untuk melakukan pemesanan dan mengelola pesanan Anda.</p>

            <form class="mt-8 flex flex-col gap-4" method="POST" action="{{ route('register') }}">
                @csrf
                <x-input name="name" label="Nama Lengkap" placeholder="Nama lengkap" :required="true" />
                <x-input name="email" label="Email" type="email" placeholder="nama@email.com" :required="true" />
                <x-input name="password" label="Password" type="password" placeholder="Minimal 8 karakter" :required="true" />
                <x-input name="password_confirmation" label="Konfirmasi Password" type="password" placeholder="Ulangi password" :required="true" />

                <div class="my-2 border-t border-hairline"></div>
                <p class="text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Data Diri</p>

                <x-input name="phone" label="No. Telepon" placeholder="08xxxxxxxxxx" :required="true" />
                <x-input name="address" label="Alamat" placeholder="Jalan, nomor rumah" :required="true" />
                <div class="grid grid-cols-2 gap-4">
                    <x-input name="city" label="Kota" placeholder="Kota" :required="true" />
                    <x-input name="province" label="Provinsi" placeholder="Provinsi" :required="true" />
                </div>
                <x-input name="postal_code" label="Kode Pos" placeholder="12345" :required="true" />

                <x-button type="submit" variant="primary" class="w-full mt-2">Buat Akun</x-button>
            </form>

                <p class="mt-6 mb-12 text-center text-[14px] font-light text-muted">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="font-medium text-primary-hover hover:text-ink">Masuk</a>
            </p>
        </div>
    </section>

</x-layout.app>
