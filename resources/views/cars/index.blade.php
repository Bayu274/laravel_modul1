<x-layout.app title="Katalog Mobil">

    <section class="px-6 pt-24 pb-24 lg:px-10">
        <div class="mx-auto max-w-[1440px]">
            <div class="reveal mb-12">
                <h1 class="text-[36px] font-bold leading-[1.1] text-ink lg:text-[48px]">Katalog Mobil</h1>
                <p class="mt-3 max-w-lg text-[16px] font-light leading-[1.6] text-muted">Jelajahi seluruh jajaran kendaraan listrik NOVARA. Filter berdasarkan kategori untuk menemukan yang tepat.</p>
            </div>

            {{-- FILTER --}}
            <div class="reveal mb-10 flex flex-wrap gap-3">
                <a href="{{ route('cars.index') }}"
                   class="rounded border px-4 py-2 text-[13px] font-bold tracking-wide transition-colors {{ !request('category') ? 'border-ink bg-ink text-white' : 'border-hairline-strong bg-transparent text-muted hover:border-ink hover:text-ink' }}">
                    Semua
                </a>
                @foreach($categories as $category)
                    <a href="{{ route('cars.index', ['category' => $category->slug]) }}"
                       class="rounded border px-4 py-2 text-[13px] font-bold tracking-wide transition-colors {{ request('category') === $category->slug ? 'border-ink bg-ink text-white' : 'border-hairline-strong bg-transparent text-muted hover:border-ink hover:text-ink' }}">
                        {{ $category->name }} ({{ $category->cars_count }})
                    </a>
                @endforeach
            </div>

            {{-- GRID --}}
            @if($cars->count() > 0)
                <div class="reveal grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($cars as $car)
                        <article class="glow-card group">
                            <div class="aspect-[16/10] w-full overflow-hidden">
                                <img src="{{ asset($car->image) }}" alt="{{ $car->name }}" class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" loading="lazy">
                            </div>
                            <div class="relative p-6">
                                <div class="flex items-center gap-2">
                                    <h3 class="text-[18px] font-bold leading-[1.4] text-ink">{{ $car->name }}</h3>
                                    <x-badge :status="$car->status" />
                                </div>
                                <p class="mt-1 text-[14px] font-light leading-[1.55] text-muted">{{ $car->tagline }}</p>
                                <div class="mt-2 flex flex-wrap gap-2">
                                    @foreach($car->categories as $cat)
                                        <span class="text-[11px] font-bold uppercase tracking-wider text-muted-soft">{{ $cat->name }}</span>
                                    @endforeach
                                </div>
                                <p class="mt-2 font-serif text-[15px] text-body">{{ $car->price }}</p>
                                <a href="{{ route('cars.show', $car->slug) }}" class="link-uppercase mt-4">Pelajari Lebih Lanjut <span aria-hidden="true">›</span></a>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="mt-12">
                    {{ $cars->links() }}
                </div>
            @else
                <div class="text-center py-20">
                    <p class="text-[16px] font-light text-muted">Tidak ada mobil yang ditemukan dalam kategori ini.</p>
                    <a href="{{ route('cars.index') }}" class="btn-secondary mt-6 inline-flex">Lihat Semua Model</a>
                </div>
            @endif
        </div>
    </section>

</x-layout.app>
