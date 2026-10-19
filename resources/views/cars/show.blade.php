<x-layout.app :title="$car->name">

    {{-- HERO --}}
    <section class="relative overflow-hidden px-6 pt-16 lg:px-10">
        <div class="absolute inset-0 bg-gradient-to-b from-surface-elevated/40 via-void/60 to-void"></div>

        <div class="relative mx-auto max-w-[1440px] py-16 lg:py-24">
            <div class="reveal">
                <a href="{{ route('cars.index') }}" class="mb-8 inline-flex items-center gap-2 text-[13px] font-bold uppercase tracking-[1.5px] text-muted-soft transition-colors duration-150 hover:text-ink">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                    Semua Model
                </a>
            </div>

            <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">
                <div class="reveal">
                    <p class="text-[13px] font-bold uppercase tracking-[1.5px]" style="color: {{ $car->color }}">{{ $car->subtitle }}</p>
                    <h1 class="mt-4 text-[42px] font-bold leading-[1.05] text-ink lg:text-[68px]">{{ $car->name }}</h1>
                    <p class="mt-4 max-w-md text-[16px] font-light leading-[1.6] text-body">{{ $car->description }}</p>
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#spesifikasi" class="btn-primary">Lihat Spesifikasi</a>
                        @auth
                            <a href="{{ route('checkout.create', $car->slug) }}" class="btn-primary !bg-green-600 hover:!bg-green-700">Pesan Sekarang</a>
                        @else
                            <a href="{{ route('login') }}" class="btn-primary !bg-green-600 hover:!bg-green-700">Login untuk Beli</a>
                        @endauth
                        <a href="{{ route('test-drive.create') }}" class="btn-secondary">Jadwalkan Test Drive</a>
                    </div>
                </div>

                <div class="reveal hero-fade-delay-1">
                    <div class="aspect-[3/2] w-full overflow-hidden border border-hairline">
                        <img src="{{ asset($car->image) }}" alt="{{ $car->name }}" class="h-full w-full object-cover" loading="eager">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- HIGHLIGHT --}}
    <div class="m-stripe-divider reveal-stripe"></div>
    <section class="border-y border-hairline bg-surface py-16 lg:py-20">
        <div class="reveal mx-auto max-w-[820px] text-center px-6">
            <p class="font-serif text-[22px] font-light italic leading-[1.6] text-ink lg:text-[30px]">
                "{{ $car->tagline }}"
            </p>
        </div>
    </section>

    {{-- PROMO --}}
    @if($car->promos->count() > 0)
        <section class="px-6 py-12 lg:px-10">
            <div class="mx-auto max-w-[1440px]">
                @foreach($car->promos as $promo)
                    <div class="reveal mb-6 rounded border border-primary/30 bg-primary/5 p-6">
                        <div class="flex items-center gap-4">
                            <div class="rounded bg-primary/20 px-3 py-1.5">
                                <span class="text-[14px] font-bold text-primary-hover">
                                    @if($promo->discount_type === 'percentage')
                                        Diskon {{ number_format($promo->discount_value, 0) }}%
                                    @else
                                        Potongan Rp {{ number_format($promo->discount_value, 0, ',', '.') }}
                                    @endif
                                </span>
                            </div>
                            <div>
                                <h3 class="text-[16px] font-bold text-ink">{{ $promo->title }}</h3>
                                <p class="text-[13px] text-muted">{{ $promo->description }}</p>
                            </div>
                            @if($promo->promo_code)
                                <div class="ml-auto rounded border border-hairline-strong bg-surface px-3 py-1.5">
                                    <span class="text-[13px] font-bold tracking-wider text-ink">{{ $promo->promo_code }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    {{-- SPECS --}}
    <section id="spesifikasi" class="px-6 py-24 lg:px-10">
        <div class="mx-auto max-w-[1440px]">
            <div class="reveal mb-14">
                <h2 class="text-[30px] font-bold leading-[1.15] text-ink lg:text-[40px]">Spesifikasi</h2>
                <p class="mt-2 max-w-md text-[15px] font-light text-muted">Setiap detail direkayasa tanpa kompromi.</p>
            </div>

            <div class="grid grid-cols-1 gap-10 lg:gap-14">
                @php
                    $groupedSpecs = $car->specifications->groupBy('category');
                @endphp
                @foreach ($groupedSpecs as $category => $items)
                    <div class="reveal">
                        <h3 class="mb-6 text-[13px] font-bold uppercase tracking-[1.5px]" style="color: {{ $car->color }}">{{ $category }}</h3>
                        <div class="border-t border-hairline">
                            @foreach ($items as $item)
                                <div class="flex items-baseline justify-between border-b border-hairline py-4 @if($loop->first) border-t-0 @endif">
                                    <span class="text-[15px] font-light text-muted">{{ $item->label }}</span>
                                    <span class="text-[15px] font-medium text-ink text-right ml-4">{{ $item->value }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FEATURES --}}
    <section class="border-t border-hairline bg-surface px-6 py-24 lg:px-10">
        <div class="mx-auto max-w-[1440px]">
            <div class="reveal mb-14">
                <h2 class="text-[30px] font-bold leading-[1.15] text-ink lg:text-[40px]">Fitur Unggulan</h2>
                <p class="mt-2 max-w-md text-[15px] font-light text-muted">Teknologi yang mengubah cara Anda berkendara.</p>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($car->features as $feature)
                    <div class="glow-card p-6">
                        <div class="flex items-start gap-4">
                            <div class="mt-0.5 h-2 w-2 shrink-0 rounded-full" style="background-color: {{ $car->color }}"></div>
                            <p class="text-[15px] font-light leading-[1.6] text-body">{{ $feature->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA HARGA --}}
    <section class="relative overflow-hidden bg-surface px-6 py-24 text-center lg:px-10">
        <img src="{{ asset($car->image) }}" alt="" class="absolute inset-0 h-full w-full object-cover opacity-20" loading="lazy">
        <div class="relative reveal mx-auto max-w-[560px]">
            <p class="text-[13px] font-bold uppercase tracking-[1.5px] text-muted-soft">Mulai dari</p>
            <p class="mt-3 font-serif text-[40px] font-medium text-ink lg:text-[52px]">{{ $car->price }}</p>
            <p class="mt-4 text-[15px] font-light text-muted">Harga sebelum insentif pemerintah. Konsultasikan dengan dealer untuk penawaran terbaik.</p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                @auth
                    <a href="{{ route('checkout.create', $car->slug) }}" class="btn-primary !bg-green-600 hover:!bg-green-700">Pesan Sekarang</a>
                @else
                    <a href="{{ route('login') }}" class="btn-primary !bg-green-600 hover:!bg-green-700">Login untuk Beli</a>
                @endauth
                <a href="{{ route('cars.index') }}" class="btn-secondary">Kembali ke Katalog</a>
            </div>
        </div>
    </section>

    {{-- MODEL LAINNYA --}}
    <section class="px-6 py-24 lg:px-10">
        <div class="mx-auto max-w-[1440px]">
            <div class="reveal mb-10">
                <h2 class="text-[24px] font-bold leading-[1.2] text-ink">Jelajahi Model Lainnya</h2>
            </div>
            <div class="reveal grid grid-cols-1 gap-4 sm:grid-cols-2">
                <a href="{{ route('cars.show', $prevCar->slug) }}" class="glow-card group flex items-center justify-between p-6 transition-all duration-300">
                    <div>
                        <p class="text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">Sebelumnya</p>
                        <p class="mt-1 text-[18px] font-bold text-ink">{{ $prevCar->name }}</p>
                    </div>
                    <svg class="text-muted-soft transition-colors duration-150 group-hover:text-ink" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                </a>
                <a href="{{ route('cars.show', $nextCar->slug) }}" class="glow-card group flex items-center justify-between p-6 transition-all duration-300">
                    <div>
                        <p class="text-[12px] font-bold uppercase tracking-[1.5px] text-muted-soft">Selanjutnya</p>
                        <p class="mt-1 text-[18px] font-bold text-ink">{{ $nextCar->name }}</p>
                    </div>
                    <svg class="text-muted-soft transition-colors duration-150 group-hover:text-ink rotate-180" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                </a>
            </div>
        </div>
    </section>

</x-layout.app>
