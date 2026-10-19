<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'NOVARA' }} — NOVARA Motors</title>
    <meta name="description" content="{{ $description ?? 'NOVARA — jajaran kendaraan listrik yang direkayasa untuk performa dan jangkauan.' }}">
    <link rel="icon" type="image/png" href="{{ asset('images/novara-icon.png') }}">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-void text-body antialiased">

    <div class="fixed inset-x-0 top-0 z-[60] h-[2px] bg-transparent">
        <div id="scroll-progress" class="h-full w-0 bg-primary-hover"></div>
    </div>

    <header id="site-header" class="fixed inset-x-0 top-0 z-50 h-16 border-b border-transparent bg-transparent transition-colors duration-300">
        <div class="mx-auto flex h-16 max-w-[1440px] items-center justify-between px-6 lg:px-10">
            <a href="/" class="flex items-center gap-2.5" aria-label="NOVARA — beranda">
                <img src="{{ asset('images/round-logo.jpg') }}" alt="Logo NOVARA" class="h-9 w-9 shrink-0 rounded-full border border-ink/40 object-cover" width="36" height="36">
                <span class="text-[15px] font-bold tracking-[1px] text-ink">NOVARA</span>
            </a>

            <nav class="hidden items-center gap-8 lg:flex" aria-label="Navigasi utama">
                <x-nav-link href="/#model" :active="request()->is('/')">Model</x-nav-link>
                <x-nav-link href="/#teknologi" :active="request()->is('teknologi*')">Generasi Berikutnya</x-nav-link>
                <x-nav-link href="/#filosofi" :active="request()->is('filosofi*')">Filosofi</x-nav-link>
                <x-nav-link href="{{ route('news.index') }}" :active="request()->is('berita*')">Berita</x-nav-link>
                <x-nav-link href="/#test-drive" :active="request()->is('test-drive*')">Test Drive</x-nav-link>
            </nav>

            <div class="flex items-center gap-5">
                @auth
                    @if(Auth::user()->isAdmin())
                        <a href="{{ route('admin.dashboard') }}" class="text-[13px] font-bold uppercase tracking-[1.5px] text-primary-hover transition-colors hover:text-ink">Admin</a>
                    @else
                        <a href="{{ route('customer.dashboard') }}" class="text-[13px] font-bold uppercase tracking-[1.5px] text-primary-hover transition-colors hover:text-ink">Akun Saya</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-[13px] font-bold uppercase tracking-[1.5px] text-muted-soft transition-colors hover:text-ink">Keluar</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-[13px] font-bold uppercase tracking-[1.5px] text-muted-soft transition-colors hover:text-ink">Masuk</a>
                    <a href="{{ route('register') }}" class="btn-primary !h-9 !px-5 !text-[12px]">Daftar</a>
                @endauth

                <button type="button" id="menu-toggle" class="text-ink lg:hidden" aria-label="Buka menu" aria-expanded="false" aria-controls="mobile-menu">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
                </button>
            </div>
        </div>

        <nav id="mobile-menu" class="hidden flex-col gap-1 border-t border-hairline bg-surface px-6 py-4 lg:hidden" aria-label="Navigasi mobile">
            <a href="/#model" class="border-b border-hairline py-3 text-[15px] text-ink">Model</a>
            <a href="/#teknologi" class="border-b border-hairline py-3 text-[15px] text-ink">Generasi Berikutnya</a>
            <a href="/#filosofi" class="border-b border-hairline py-3 text-[15px] text-ink">Filosofi</a>
            <a href="{{ route('news.index') }}" class="border-b border-hairline py-3 text-[15px] text-ink">Berita</a>
            <a href="/#test-drive" class="py-3 text-[15px] text-ink">Test Drive</a>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="border-t border-hairline px-6 py-16 lg:px-10">
        <div class="mx-auto max-w-[1440px]">
            <div class="mb-12">
                <a href="/" aria-label="NOVARA — beranda">
                    <img src="{{ asset('images/full-logo.jpg') }}" alt="NOVARA Motors" class="h-12 w-auto object-contain" width="88" height="48" loading="lazy">
                </a>
            </div>
            <div class="grid grid-cols-2 gap-10 lg:grid-cols-4">
                <div>
                    <h3 class="text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Model</h3>
                    <ul class="mt-4 flex flex-col gap-3">
                        <li><a href="{{ route('cars.show', 'e3') }}" class="text-[14px] font-light text-muted hover:text-ink">NOVARA e3</a></li>
                        <li><a href="{{ route('cars.show', 'e5') }}" class="text-[14px] font-light text-muted hover:text-ink">NOVARA e5</a></li>
                        <li><a href="{{ route('cars.show', 'gt') }}" class="text-[14px] font-light text-muted hover:text-ink">NOVARA GT</a></li>
                        <li><a href="{{ route('cars.show', 'x') }}" class="text-[14px] font-light text-muted hover:text-ink">NOVARA X</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Layanan</h3>
                    <ul class="mt-4 flex flex-col gap-3">
                        <li><a href="/#test-drive" class="text-[14px] font-light text-muted hover:text-ink">Test Drive</a></li>
                        <li><a href="#" class="text-[14px] font-light text-muted hover:text-ink">Purnajual</a></li>
                        <li><a href="#" class="text-[14px] font-light text-muted hover:text-ink">Garansi</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Dealer</h3>
                    <ul class="mt-4 flex flex-col gap-3">
                        <li><a href="{{ route('cars.index') }}" class="text-[14px] font-light text-muted hover:text-ink">Katalog Mobil</a></li>
                        <li><a href="#" class="text-[14px] font-light text-muted hover:text-ink">Cari Dealer</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Tentang</h3>
                    <ul class="mt-4 flex flex-col gap-3">
                        <li><a href="{{ route('news.index') }}" class="text-[14px] font-light text-muted hover:text-ink">Berita</a></li>
                        <li><a href="#" class="text-[14px] font-light text-muted hover:text-ink">Perusahaan</a></li>
                        <li><a href="#" class="text-[14px] font-light text-muted hover:text-ink">Karier</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-14 border-t border-hairline pt-6">
                <p class="text-[14px] font-light text-muted-soft">&copy; {{ date('Y') }} NOVARA Motors. Brand demo untuk keperluan portofolio — tidak berafiliasi dengan produsen kendaraan mana pun.</p>
            </div>
        </div>
    </footer>

    <div id="cookie-banner" class="fixed inset-x-0 bottom-0 z-50 hidden border-t border-hairline bg-surface px-6 py-6 lg:px-10">
        <div class="mx-auto flex max-w-[1440px] flex-col items-start justify-between gap-4 lg:flex-row lg:items-center">
            <p class="max-w-2xl text-[14px] font-light leading-[1.55] text-muted">
                Situs ini menggunakan cookie untuk mengingat preferensi Anda dan meningkatkan pengalaman menjelajah.
            </p>
            <div class="flex shrink-0 gap-4">
                <button type="button" id="cookie-decline" class="btn-secondary">Tolak</button>
                <button type="button" id="cookie-accept" class="btn-primary">Terima</button>
            </div>
        </div>
    </div>

    <script>
        const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenu = () => {
            mobileMenu?.classList.add('hidden');
            mobileMenu?.classList.remove('flex');
            menuToggle?.setAttribute('aria-expanded', 'false');
        };
        menuToggle?.addEventListener('click', () => {
            const isOpen = mobileMenu?.classList.toggle('flex') ?? false;
            mobileMenu?.classList.toggle('hidden', !isOpen);
            menuToggle?.setAttribute('aria-expanded', String(isOpen));
        });
        mobileMenu?.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', closeMenu);
        });

        const header = document.getElementById('site-header');
        const onScroll = () => {
            if (window.scrollY > 20) {
                header.classList.add('bg-void/80', 'backdrop-blur-md', 'border-hairline');
            } else {
                header.classList.remove('bg-void/80', 'backdrop-blur-md', 'border-hairline');
            }
            const progress = document.getElementById('scroll-progress');
            if (progress) {
                const doc = document.documentElement;
                const scrolled = doc.scrollTop / (doc.scrollHeight - doc.clientHeight);
                progress.style.width = `${Math.min(scrolled * 100, 100)}%`;
            }
        };
        document.addEventListener('scroll', onScroll, { passive: true });
        onScroll();

        const revealEls = document.querySelectorAll('.reveal, .reveal-stripe');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });
        revealEls.forEach((el) => {
            if (reduceMotion) { el.classList.add('is-visible'); } else { revealObserver.observe(el); }
        });

        document.querySelectorAll('.glow-card').forEach((card) => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                card.style.setProperty('--mx', `${e.clientX - rect.left}px`);
                card.style.setProperty('--my', `${e.clientY - rect.top}px`);
            });
        });

        const cookieBanner = document.getElementById('cookie-banner');
        if (!localStorage.getItem('novara_cookie_choice')) {
            cookieBanner?.classList.remove('hidden');
        }
        document.getElementById('cookie-accept')?.addEventListener('click', () => {
            localStorage.setItem('novara_cookie_choice', 'accepted');
            cookieBanner?.classList.add('hidden');
        });
        document.getElementById('cookie-decline')?.addEventListener('click', () => {
            localStorage.setItem('novara_cookie_choice', 'declined');
            cookieBanner?.classList.add('hidden');
        });
    </script>
</body>
</html>
