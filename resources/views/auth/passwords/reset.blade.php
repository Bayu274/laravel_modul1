<x-layout.app title="Atur Ulang Password">

    <section class="px-6 pt-24 pb-32 lg:px-10 mt-20">
        <div class="reveal mx-auto max-w-[440px]">
            <h1 class="text-center text-[32px] font-bold text-ink">Atur Ulang Password</h1>
                            <p class="mt-6 mb-12 text-center text-[15px] font-light text-muted">Masukkan password baru Anda.
            </p>

            @if (session('status'))
                <div class="mt-4 text-center text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form class="mt-8 flex flex-col gap-4" method="POST" action="{{ route('password.update') }}"
                @csrf
                <input type="hidden" name="token" value="{{ $token }}" >
                <input type="hidden" name="email" value="{{ $email }}" >

                <x-input name="password" label="Password Baru" type="password" placeholder="Minimal 8 karakter" :required="true" />
                <x-input name="password_confirmation" label="Konfirmasi Password" type="password" placeholder="Ulangi password" :required="true" />

                @error('password')
                    <div class="text-center text-red-600"
                        {{ $message }}
                    </div>
                @enderror

                <x-button
type="submit" variant="primary" class="w-full">Atur Ubalik
</x-button>
            </form>
        </div>
    </section>

</x-layout.app>
