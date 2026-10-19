<x-layout.app title="Berita">

    <section class="px-6 pt-24 pb-24 lg:px-10">
        <div class="mx-auto max-w-[1440px]">
            <div class="reveal mb-12">
                <h1 class="text-[36px] font-bold leading-[1.1] text-ink lg:text-[48px]">Berita NOVARA</h1>
                <p class="mt-3 max-w-lg text-[16px] font-light leading-[1.6] text-muted">Informasi terbaru seputar produk, teknologi, dan perkembangan NOVARA Motors.</p>
            </div>

            @if($news->count() > 0)
                <div class="reveal grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($news as $article)
                        <a href="{{ route('news.show', $article->slug) }}" class="glow-card group">
                            @if($article->image)
                                <div class="aspect-[16/10] w-full overflow-hidden">
                                    <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" loading="lazy">
                                </div>
                            @else
                                <div class="aspect-[16/10] w-full bg-surface-elevated flex items-center justify-center">
                                    <span class="text-[48px] text-muted-soft">📰</span>
                                </div>
                            @endif
                            <div class="relative p-6">
                                @if($article->is_featured)
                                    <span class="mb-2 inline-block rounded bg-primary/20 px-2 py-0.5 text-[11px] font-bold uppercase tracking-wider text-primary-hover">Unggulan</span>
                                @endif
                                <h3 class="text-[18px] font-bold leading-[1.4] text-ink group-hover:text-primary-hover transition-colors">{{ $article->title }}</h3>
                                @if($article->excerpt)
                                    <p class="mt-2 text-[14px] font-light leading-[1.55] text-muted line-clamp-2">{{ $article->excerpt }}</p>
                                @endif
                                <p class="mt-3 text-[12px] font-light text-muted-soft">
                                    {{ $article->published_at ? $article->published_at->format('d M Y') : $article->created_at->format('d M Y') }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="mt-12">
                    {{ $news->links() }}
                </div>
            @else
                <div class="text-center py-20">
                    <p class="text-[16px] font-light text-muted">Belum ada berita yang dipublikasikan.</p>
                </div>
            @endif
        </div>
    </section>

</x-layout.app>
