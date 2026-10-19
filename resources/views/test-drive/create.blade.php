<x-layout.app title="Jadwalkan Test Drive">

    <section class="px-6 pt-24 pb-24 lg:px-10">
        <div class="reveal mx-auto max-w-[560px] text-center">
            <h1 class="text-[36px] font-bold leading-[1.1] text-ink lg:text-[48px]">Jadwalkan Test Drive</h1>
            <p class="mt-3 text-[16px] font-light leading-[1.55] text-muted">
                Isi kontak Anda dan dealer terdekat akan menghubungi untuk mengatur waktu.
            </p>

            <form class="mt-8 flex flex-col gap-4 text-left" action="{{ route('test-drive.store') }}" method="POST">
                @csrf
                <x-input name="nama" label="Nama Lengkap" placeholder="Nama lengkap" :required="true" :value="Auth::user()->name ?? ''" />
                <x-input name="email" label="Email" type="email" placeholder="nama@email.com" :required="true" :value="Auth::user()->email ?? ''" />
                <x-input name="phone" label="No. Telepon" placeholder="08xxxxxxxxxx" :value="Auth::user()->phone ?? ''" />
                <x-select name="model" label="Model Diminati" :required="true"
                    :options="[
                        'NOVARA e3' => 'NOVARA e3',
                        'NOVARA e5' => 'NOVARA e5',
                        'NOVARA GT' => 'NOVARA GT',
                        'NOVARA X' => 'NOVARA X',
                    ]" />
                <x-input name="preferred_date" label="Tanggal Preferensi" type="date" :required="true" />
                <x-textarea name="notes" label="Catatan (Opsional)" placeholder="Hal-hal khusus yang perlu kami ketahui..." />
                <x-button type="submit" variant="primary" class="w-full mt-2">Kirim Permintaan</x-button>
            </form>
        </div>
    </section>

</x-layout.app>
