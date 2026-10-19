<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $car['name'] }} — NOVARA Motors</title>
    <meta name="description" content="{{ $car['tagline'] }}">
    <link rel="icon" type="image/png" href="{{ asset('images/novara-icon.png') }}">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-void text-body antialiased">

    <div class="fixed inset-x-0 top-0 z-[60] h-[2px] bg-transparent">
        <div id="scroll-progress" class="h-full w-0 bg-primary-hover"></div>
    </div>

    {{-- ============ HEADER ============ --}}
    <header id="site-header" class="fixed inset-x-0 top-0 z-50 h-16 border-b border-transparent bg-transparent transition-colors duration-300">
        <div class="mx-auto flex h-16 max-w-[1440px] items-center justify-between px-6 lg:px-10">
            <a href="/" class="flex items-center gap-2.5" aria-label="NOVARA — beranda">
                <img src="{{ asset('images/round-logo.jpg') }}" alt="Logo NOVARA" class="h-9 w-9 shrink-0 rounded-full border border-ink/40 object-cover" width="36" height="36">
                <span class="text-[15px] font-bold tracking-[1px] text-ink">NOVARA</span>
            </a>

            <nav class="hidden items-center gap-8 lg:flex" aria-label="Navigasi utama">
                <a href="/#model" class="nav-link">Model</a>
                <a href="/#teknologi" class="nav-link">Generasi Berikutnya</a>
                <a href="/#filosofi" class="nav-link">Filosofi</a>
                <a href="/#test-drive" class="nav-link">Test Drive</a>
            </nav>

            <div class="flex items-center gap-5">
                <button type="button" class="hidden text-[14px] text-body lg:inline" aria-label="Pilih bahasa">ID</button>
                <button type="button" class="text-ink" aria-label="Profil">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="8" r="3.4"/><path d="M4.5 20c1.6-3.6 4.6-5.4 7.5-5.4s5.9 1.8 7.5 5.4"/></svg>
                </button>
                <button type="button" id="menu-toggle" class="text-ink lg:hidden" aria-label="Buka menu" aria-expanded="false" aria-controls="mobile-menu">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
                </button>
            </div>
        </div>

        <nav id="mobile-menu" class="hidden flex-col gap-1 border-t border-hairline bg-surface px-6 py-4 lg:hidden" aria-label="Navigasi mobile">
            <a href="/#model" class="border-b border-hairline py-3 text-[15px] text-ink">Model</a>
            <a href="/#teknologi" class="border-b border-hairline py-3 text-[15px] text-ink">Generasi Berikutnya</a>
            <a href="/#filosofi" class="border-b border-hairline py-3 text-[15px] text-ink">Filosofi</a>
            <a href="/#test-drive" class="py-3 text-[15px] text-ink">Test Drive</a>
        </nav>
    </header>

    <main>
        {{-- ============ HERO ============ --}}
        <section class="relative overflow-hidden px-6 pt-16 lg:px-10">
            <div class="absolute inset-0 bg-gradient-to-b from-surface-elevated/40 via-void/60 to-void"></div>

            <div class="relative mx-auto max-w-[1440px] py-16 lg:py-24">
                <div class="reveal">
                    <a href="/" class="mb-8 inline-flex items-center gap-2 text-[13px] font-bold uppercase tracking-[1.5px] text-muted-soft transition-colors duration-150 hover:text-ink">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                        Semua Model
                    </a>
                </div>

                <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
                    <div class="reveal">
                        <p class="text-[13px] font-bold uppercase tracking-[1.5px]" style="color: {{ $car['color'] }}">{{ $car['subtitle'] }}</p>
                        <h1 class="mt-4 text-[42px] font-bold leading-[1.05] text-ink lg:text-[68px]">{{ $car['name'] }}</h1>
                        <p class="mt-4 max-w-md text-[16px] font-light leading-[1.6] text-body">{{ $car['description'] }}</p>
                        <div class="mt-8 flex flex-wrap gap-4">
                            <a href="#spesifikasi" class="btn-primary">Lihat Spesifikasi</a>
                            <a href="/#test-drive" class="btn-secondary">Jadwalkan Test Drive</a>
                        </div>
                    </div>

                    <div class="reveal hero-fade-delay-1">
                        <div class="aspect-[3/2] w-full overflow-hidden border border-hairline">
                            <img
                                src="{{ asset($car['img']) }}"
                                alt="{{ $car['name'] }}"
                                class="h-full w-full object-cover"
                                loading="eager">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ============ HIGHLIGHT STRIP ============ --}}
        <div class="m-stripe-divider reveal-stripe"></div>
        <section class="border-y border-hairline bg-surface py-16 lg:py-20">
            <div class="reveal mx-auto max-w-[820px] text-center px-6">
                <p class="font-serif text-[22px] font-light italic leading-[1.6] text-ink lg:text-[30px]">
                    "{{ $car['highlight'] }}"
                </p>
            </div>
        </section>

        {{-- ============ SPECS ============ --}}
        <section id="spesifikasi" class="px-6 py-24 lg:px-10">
            <div class="mx-auto max-w-[1440px]">
                <div class="reveal mb-14">
                    <h2 class="text-[30px] font-bold leading-[1.15] text-ink lg:text-[40px]">Spesifikasi</h2>
                    <p class="mt-2 max-w-md text-[15px] font-light text-muted">Setiap detail direkayasa tanpa kompromi.</p>
                </div>

                <div class="grid grid-cols-1 gap-10 lg:gap-14">
                    @foreach ($car['specs'] as $category => $items)
                        <div class="reveal">
                            <h3 class="mb-6 text-[13px] font-bold uppercase tracking-[1.5px]" style="color: {{ $car['color'] }}">{{ $category }}</h3>
                            <div class="border-t border-hairline">
                                @foreach ($items as $item)
                                    <div class="flex items-baseline justify-between border-b border-hairline py-4 @if($loop->first) border-t-0 @endif">
                                        <span class="text-[15px] font-light text-muted">{{ $item['label'] }}</span>
                                        <span class="text-[15px] font-medium text-ink text-right ml-4">{{ $item['value'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ============ FITUR ============ --}}
        <section class="border-t border-hairline bg-surface px-6 py-24 lg:px-10">
            <div class="mx-auto max-w-[1440px]">
                <div class="reveal mb-14">
                    <h2 class="text-[30px] font-bold leading-[1.15] text-ink lg:text-[40px]">Fitur Unggulan</h2>
                    <p class="mt-2 max-w-md text-[15px] font-light text-muted">Teknologi yang mengubah cara Anda berkendara.</p>
                </div>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($car['features'] as $feature)
                        <div class="glow-card p-6">
                            <div class="flex items-start gap-4">
                                <div class="mt-0.5 h-2 w-2 shrink-0 rounded-full" style="background-color: {{ $car['color'] }}"></div>
                                <p class="text-[15px] font-light leading-[1.6] text-body">{{ $feature }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ============ CTA HARGA ============ --}}
        <section class="relative overflow-hidden bg-surface px-6 py-24 text-center lg:px-10">
            <img src="{{ asset($car['img']) }}" alt="" class="absolute inset-0 h-full w-full object-cover opacity-20" loading="lazy">
            <div class="relative reveal mx-auto max-w-[560px]">
                <p class="text-[13px] font-bold uppercase tracking-[1.5px] text-muted-soft">Mulai dari</p>
                <p class="mt-3 font-serif text-[40px] font-medium text-ink lg:text-[52px]">{{ $car['price'] }}</p>
                <p class="mt-4 text-[15px] font-light text-muted">Harga sebelum insentif pemerintah. Konsultasikan dengan dealer untuk penawaran terbaik.</p>
                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a href="/#test-drive" class="btn-primary">Jadwalkan Test Drive</a>
                    <a href="/" class="btn-secondary">Kembali ke Beranda</a>
                </div>
            </div>
        </section>

        {{-- ============ MODEL LAINNYA ============ --}}
        <section class="px-6 py-24 lg:px-10">
            <div class="mx-auto max-w-[1440px]">
                <div class="reveal mb-10">
                    <h2 class="text-[24px] font-bold leading-[1.2] text-ink">Jelajahi Model Lainnya</h2>
                </div>
                <div class="reveal grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <a href="{{ route('models.show', $prevModel['slug']) }}" class="glow-card group flex items-center justify-between p-6 transition-all duration-300">
                        <div>
                            <p class="text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">Sebelumnya</p>
                            <p class="mt-1 text-[18px] font-bold text-ink">{{ $prevModel['name'] }}</p>
                        </div>
                        <svg class="text-muted-soft transition-colors duration-150 group-hover:text-ink" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                    </a>
                    <a href="{{ route('models.show', $nextModel['slug']) }}" class="glow-card group flex items-center justify-between p-6 transition-all duration-300">
                        <div>
                            <p class="text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">Selanjutnya</p>
                            <p class="mt-1 text-[18px] font-bold text-ink">{{ $nextModel['name'] }}</p>
                        </div>
                        <svg class="text-muted-soft transition-colors duration-150 group-hover:text-ink rotate-180" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                    </a>
                </div>
            </div>
        </section>
    </main>

    {{-- ============ FOOTER ============ --}}
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
                        <li><a href="{{ route('models.show', 'e3') }}" class="text-[14px] font-light text-muted hover:text-ink">NOVARA e3</a></li>
                        <li><a href="{{ route('models.show', 'e5') }}" class="text-[14px] font-light text-muted hover:text-ink">NOVARA e5</a></li>
                        <li><a href="{{ route('models.show', 'gt') }}" class="text-[14px] font-light text-muted hover:text-ink">NOVARA GT</a></li>
                        <li><a href="{{ route('models.show', 'x') }}" class="text-[14px] font-light text-muted hover:text-ink">NOVARA X</a></li>
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
                        <li><a href="#" class="text-[14px] font-light text-muted hover:text-ink">Cari Dealer</a></li>
                        <li><a href="#" class="text-[14px] font-light text-muted hover:text-ink">Konfigurasi &amp; Pesan</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-[13px] font-bold uppercase tracking-[1.5px] text-ink">Tentang</h3>
                    <ul class="mt-4 flex flex-col gap-3">
                        <li><a href="#" class="text-[14px] font-light text-muted hover:text-ink">Perusahaan</a></li>
                        <li><a href="#" class="text-[14px] font-light text-muted hover:text-ink">Karier</a></li>
                        <li><a href="#" class="text-[14px] font-light text-muted hover:text-ink">Media</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-14 border-t border-hairline pt-6">
                <p class="text-[14px] font-light text-muted-soft">&copy; {{ date('Y') }} NOVARA Motors. Brand demo untuk keperluan portofolio — tidak berafiliasi dengan produsen kendaraan mana pun.</p>
            </div>
        </div>
    </footer>

    {{-- ============ COOKIE CONSENT ============ --}}
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
            if (reduceMotion) {
                el.classList.add('is-visible');
            } else {
                revealObserver.observe(el);
            }
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
