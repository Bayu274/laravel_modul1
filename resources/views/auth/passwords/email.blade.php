<x-layout.app title="Lupa Password">

    <section class="px-6 pt-24 pb-32 lg:px-10 mt-20">
        <div class="reveal mx-auto max-w-[440px]">
            <h1 class="text-center text-[32px] font-bold text-ink">Lupa Password</h1>
                            <p class="mt-6 mb-12 text-center text-[15px] font-light text-muted">Masukkan email akun Anda untuk menerima tautan reset password.</p>

            @if (session('status'))
                <div class="mt-4 text-center text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form class="mt-8 flex flex-col gap-4 mb-12" method="POST" action="{{ route('password.email') }}">
                @csrf
                <x-input name="email" label="Email" type="email" placeholder="nama@email.com" :required="true" />

                @error('email')
                    <div class="text-center text-red-600">
                        {{ $message }}
                    </div>
                @enderror

                <x-button type="submit" variant="primary" class="w-full">Kirim Tautan Reset</x-button>
            </form>
        </div>
    </section>

</x-layout.app>
