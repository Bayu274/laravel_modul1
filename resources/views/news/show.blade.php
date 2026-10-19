<x-layout.app :title="$article->title">

    <section class="px-6 pt-24 pb-24 lg:px-10">
        <div class="mx-auto max-w-[760px]">
            <div class="reveal">
                <a href="{{ route('news.index') }}" class="mb-8 inline-flex items-center gap-2 text-[13px] font-bold uppercase tracking-[1.5px] text-muted-soft transition-colors duration-150 hover:text-ink">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                    Kembali ke Berita
                </a>
            </div>

            <div class="reveal">
                @if($article->is_featured)
                    <span class="mb-3 inline-block rounded bg-primary/20 px-2.5 py-1 text-[11px] font-bold uppercase tracking-wider text-primary-hover">Unggulan</span>
                @endif

                <h1 class="text-[32px] font-bold leading-[1.15] text-ink lg:text-[42px]">{{ $article->title }}</h1>

                <p class="mt-4 text-[14px] font-light text-muted-soft">
                    Dipublikasikan {{ $article->published_at ? $article->published_at->format('d M Y, H:i') : $article->created_at->format('d M Y, H:i') }}
                </p>
            </div>

            @if($article->image)
                <div class="reveal mt-8 overflow-hidden border border-hairline">
                    <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" class="w-full object-cover" loading="lazy">
                </div>
            @endif

            <div class="reveal mt-8 prose prose-invert max-w-none text-[16px] font-light leading-[1.8] text-body">
                {!! nl2br(e($article->content)) !!}
            </div>
        </div>
    </section>

</x-layout.app>
