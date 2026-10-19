<x-layout.app title="Masuk">

    <section class="px-6 pt-24 pb-32 lg:px-10 mt-20">
        <div class="reveal mx-auto max-w-[440px]">
            <h1 class="text-center text-[32px] font-bold text-ink">Masuk</h1>
            <p class="mt-2 text-center text-[15px] font-light text-muted">Masuk ke akun NOVARA Anda.</p>

            <form class="mt-8 flex flex-col gap-4" method="POST" action="{{ route('login') }}">
                @csrf
                <x-input name="email" label="Email" type="email" placeholder="nama@email.com" :required="true" />
                <x-input name="password" label="Password" type="password" placeholder="••••••••" :required="true" />

                <div class="flex items-center gap-2">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 rounded border-hairline bg-surface text-primary focus:ring-primary">
                    <label for="remember" class="text-[14px] text-muted">Ingat saya</label>
                </div>

                <x-button type="submit" variant="primary" class="w-full">Masuk</x-button>

                <div class="text-center mt-4">
                    <a href="{{ route('password.request') }}" class="text-sm text-primary-hover hover:underline">Lupa password?</a>
                </div>
            </form>

                <p class="mt-6 mb-12 text-center text-[14px] font-light text-muted">
                Belum punya akun?
                <a href="{{ route('register') }}" class="font-medium text-primary-hover hover:text-ink">Daftar sekarang</a>
            </p>
        </div>
    </section>

</x-layout.app>
