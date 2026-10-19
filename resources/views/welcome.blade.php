<x-layout.app title="Direkayasa Untuk Jalan Ke Depan">

    {{-- HERO --}}
    <section class="grain relative flex min-h-screen items-center overflow-hidden px-6 pt-16 lg:px-10">
        <div class="aurora pointer-events-none absolute -left-1/4 -top-1/3 h-[140%] w-[140%] rounded-full opacity-40 blur-3xl"
             style="background: radial-gradient(circle at 30% 30%, #1c69d4, transparent 60%);"></div>
        <div class="pointer-events-none absolute inset-0 bg-gradient-to-b from-transparent via-void/40 to-void"></div>

        <div class="relative mx-auto grid max-w-[1440px] items-center gap-14 py-24 lg:grid-cols-2 lg:gap-16">
            <div class="hero-fade">
                <p class="text-[13px] font-bold uppercase tracking-[1.5px] text-primary-hover">NOVARA e5 — Sedan Listrik</p>
                <h1 class="mt-4 text-[42px] font-bold leading-[1.05] text-ink lg:text-[68px]">
                    Diam.<br>
                    <span class="font-serif font-medium italic text-body">Sampai kau injak pedalnya.</span>
                </h1>
                <p class="mt-6 max-w-md text-[16px] font-light leading-[1.6] text-muted">
                    Dua motor listrik, akselerasi 0–100&nbsp;km/j dalam 4,2 detik, dan kabin yang dirancang dari nol untuk baterai — bukan mesin bensin yang dikonversi.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="#model" class="btn-primary">Konfigurasi Sekarang</a>
                    <a href="#test-drive" class="btn-secondary">Jadwalkan Test Drive</a>
                </div>

                <dl class="mt-14 grid max-w-md grid-cols-3 gap-6 border-t border-hairline pt-8">
                    <div>
                        <dt class="text-[12px] uppercase tracking-[0.5px] text-muted-soft">Jangkauan</dt>
                        <dd class="mt-1 font-serif text-[30px] font-medium text-ink">
                            <span class="counter" data-target="520" data-suffix=" km">0</span>
                        </dd>
                    </div>
                    <div>
                        <dt class="text-[12px] uppercase tracking-[0.5px] text-muted-soft">0–100 km/j</dt>
                        <dd class="mt-1 font-serif text-[30px] font-medium text-ink">
                            <span class="counter" data-target="4.2" data-decimals="1" data-suffix="s">0</span>
                        </dd>
                    </div>
                    <div>
                        <dt class="text-[12px] uppercase tracking-[0.5px] text-muted-soft">Isi 10–80%</dt>
                        <dd class="mt-1 font-serif text-[30px] font-medium text-ink">
                            <span class="counter" data-target="22" data-suffix=" min">0</span>
                        </dd>
                    </div>
                </dl>
            </div>

            <div class="hero-fade hero-fade-delay-1 relative" id="parallax-wrap">
                <div id="parallax-img" class="aspect-[3/2] w-full overflow-hidden border border-hairline">
                    <img src="{{ asset('images/m5.jpg') }}" alt="NOVARA e5 sedan performa" class="h-full w-full object-cover" loading="eager">
                </div>
            </div>
        </div>

        <a href="#model" class="absolute bottom-8 left-1/2 hidden -translate-x-1/2 flex-col items-center gap-2 text-[11px] uppercase tracking-[1.5px] text-muted-soft lg:flex" aria-label="Gulir ke bawah">
            <span>Jelajahi</span>
            <span class="h-8 w-px animate-pulse bg-hairline-strong"></span>
        </a>
    </section>

    {{-- MARQUEE --}}
    <div class="m-stripe-divider reveal-stripe"></div>
    <div class="overflow-hidden border-y border-hairline bg-surface py-5">
        <div class="marquee-track">
            @for ($i = 0; $i < 2; $i++)
                <div class="flex shrink-0 items-center gap-10 pr-10">
                    @foreach($featuredCars as $car)
                        <span class="text-[15px] font-light tracking-[0.5px] text-muted-soft">{{ $car->name }}</span>
                        <span class="text-primary-hover">•</span>
                    @endforeach
                </div>
            @endfor
        </div>
    </div>

    {{-- MODEL CARDS --}}
    <section id="model" class="px-6 py-24 lg:px-10">
        <div class="mx-auto max-w-[1440px]">
            <div class="reveal mb-12">
                <h2 class="text-[30px] font-bold leading-[1.15] text-ink lg:text-[40px]">Jajaran NOVARA</h2>
                <p class="mt-2 max-w-md text-[15px] font-light text-muted">Satu platform listrik native, empat karakter berbeda.</p>
            </div>

            <div class="reveal grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($featuredCars as $car)
                    <article class="glow-card group">
                        <div class="aspect-[16/10] w-full overflow-hidden">
                            <img src="{{ asset($car->image) }}" alt="{{ $car->name }}" class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" loading="lazy">
                        </div>
                        <div class="relative p-6">
                            <h3 class="text-[18px] font-bold leading-[1.4] text-ink">{{ $car->name }}</h3>
                            <p class="mt-1 text-[14px] font-light leading-[1.55] text-muted">{{ $car->tagline }}</p>
                            <p class="mt-1 font-serif text-[15px] text-body">{{ $car->price }}</p>
                            <a href="{{ route('cars.show', $car->slug) }}" class="link-uppercase mt-4">Pelajari Lebih Lanjut <span aria-hidden="true">›</span></a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- BERITA TERBARU --}}
    <section id="berita" class="px-6 py-24 lg:px-10">
        <div class="mx-auto max-w-[1440px]">
            <div class="reveal mb-12">
                <h2 class="text-[30px] font-bold leading-[1.15] text-ink lg:text-[40px]">Berita Terbaru</h2>
                <p class="mt-2 max-w-md text-[15px] font-light text-muted">Informasi dan pembaruan terbaru dari NOVARA.</p>
            </div>

            <div class="reveal grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($latestNews as $news)
                    <article class="glow-card group">
                        <div class="relative p-6">
                            <h3 class="text-[18px] font-bold text-ink">{{ $news->title }}</h3>
                            <p class="mt-1 text-[14px] font-light text-muted">{{ \Illuminate\Support\Str::limit($news->excerpt ?? $news->content, 120) }}</p>
                            <a href="{{ route('news.show', $news->slug) }}" class="link-uppercase mt-4">Baca Selengkapnya <span aria-hidden="true">›</span></a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="filosofi" class="px-6 py-28 lg:px-10">
        <div class="reveal mx-auto max-w-[820px] text-center">
            <p class="font-serif text-[26px] font-light italic leading-[1.5] text-ink lg:text-[36px]">
                "Kami tidak mendesain mobil listrik yang menyamar sebagai mobil bensin.
                Kami mendesain ulang apa artinya berkendara, mulai dari baterai ke atas."
            </p>
            <p class="mt-6 text-[13px] uppercase tracking-[1.5px] text-muted-soft">Kepala Desain, NOVARA Motors</p>
        </div>
    </section>

    {{-- CTA --}}
    <div class="m-stripe-divider reveal-stripe"></div>
    <section class="relative overflow-hidden bg-surface px-6 py-24 text-center lg:px-10">
        <img src="{{ asset('images/suv.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover opacity-30" loading="lazy">
        <div class="relative reveal mx-auto max-w-[1440px]">
            <h2 class="text-[26px] font-bold leading-[1.25] text-ink lg:text-[36px]">Temukan NOVARA X</h2>
            <p class="mx-auto mt-3 max-w-md text-[16px] font-light leading-[1.55] text-muted">
                SUV listrik tujuh kursi dengan jangkauan 480 km dan bagasi 620 liter.
            </p>
            <a href="{{ route('cars.show', 'x') }}" class="btn-secondary mt-8 inline-flex">Jelajahi NOVARA X</a>
        </div>
    </section>

    {{-- TEST DRIVE --}}
    <section id="test-drive" class="px-6 py-24 lg:px-10">
        <div class="reveal mx-auto max-w-[560px] text-center">
            <h2 class="text-[26px] font-bold leading-[1.25] text-ink lg:text-[34px]">Jadwalkan Test Drive</h2>
            <p class="mt-3 text-[16px] font-light leading-[1.55] text-muted">
                Isi kontak Anda dan dealer terdekat akan menghubungi untuk mengatur waktu.
            </p>
            @if (session('test_drive_data'))
                <div class="mt-8 border border-primary/40 bg-primary-soft px-5 py-4 text-left">
                    <p class="text-[14px] font-bold text-ink">Terima kasih, {{ session('test_drive_data')['nama'] }}!</p>
                    <p class="mt-1 text-[13px] font-light leading-[1.5] text-body">
                        Permintaan test drive Anda untuk {{ session('test_drive_data')['model'] }} telah kami terima.
                        Dealer terdekat akan menghubungi {{ session('test_drive_data')['email'] }} untuk mengatur waktu.
                    </p>
                </div>
            @endif

            <form class="mt-8 flex flex-col gap-4 text-left" action="{{ route('test-drive.store') }}" method="POST">
                @csrf
                <x-input name="nama" label="Nama" placeholder="Nama lengkap" :required="true" :value="Auth::user()->name ?? ''" />
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
                <x-button type="submit" variant="primary" class="w-full mt-2">Kirim Permintaan</x-button>
            </form>
        </div>
    </section>

    {{-- SCRIPTS --}}
    <script>
        const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        const parallaxImg = document.getElementById('parallax-img');
        document.addEventListener('scroll', () => {
            if (parallaxImg && !reduceMotion) {
                const offset = Math.min(window.scrollY * 0.12, 60);
                parallaxImg.style.transform = `translateY(${offset}px)`;
            }
        }, { passive: true });

        const counters = document.querySelectorAll('.counter');
        const animateCounter = (el) => {
            const target = parseFloat(el.dataset.target);
            const decimals = parseInt(el.dataset.decimals || '0', 10);
            const suffix = el.dataset.suffix || '';
            if (reduceMotion) { el.textContent = target.toFixed(decimals) + suffix; return; }
            const duration = 1400;
            const start = performance.now();
            const step = (now) => {
                const progress = Math.min((now - start) / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = (target * eased).toFixed(decimals) + suffix;
                if (progress < 1) requestAnimationFrame(step);
            };
            requestAnimationFrame(step);
        };
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) { animateCounter(entry.target); counterObserver.unobserve(entry.target); }
            });
        }, { threshold: 0.6 });
        counters.forEach((el) => counterObserver.observe(el));
    </script>
</x-layout.app>
