@props(['title' => 'Admin'])

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} — NOVARA Admin</title>
    <link rel="icon" type="image/png" href="{{ asset('images/novara-icon.png') }}">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-void text-body antialiased">

    <div class="flex min-h-screen">
        <aside id="admin-sidebar" class="fixed inset-y-0 left-0 z-40 hidden w-64 border-r border-hairline bg-surface lg:block">
            <div class="flex h-16 items-center gap-2.5 border-b border-hairline px-6">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2.5">
                    <img src="{{ asset('images/round-logo.jpg') }}" alt="Logo" class="h-8 w-8 shrink-0 rounded-full border border-ink/40 object-cover" width="32" height="32">
                    <span class="text-[14px] font-bold tracking-[1px] text-ink">NOVARA</span>
                    <span class="rounded bg-primary px-1.5 py-0.5 text-[10px] font-bold uppercase text-white">Admin</span>
                </a>
            </div>
            <nav class="flex flex-col gap-1 p-4" aria-label="Sidebar navigation">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0a1 1 0 01-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 01-1 1h-2"/></svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.cars.index') }}" class="sidebar-link {{ request()->routeIs('admin.cars.*') ? 'active' : '' }}">
                    <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor"><path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zm10 0a2 2 0 11-4 0 2 2 0 014 0zM5 4h14l-1.5 9h-11L5 4zm0 0L4 2H1"/></svg>
                    Mobil
                </a>
                <a href="{{ route('admin.categories.index') }}" class="sidebar-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                    <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor"><path d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A2 2 0 013 12V7a4 4 0 014-4z"/></svg>
                    Kategori
                </a>
                <a href="{{ route('admin.news.index') }}" class="sidebar-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}">
                    <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor"><path d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                    Berita
                </a>
                <a href="{{ route('admin.promos.index') }}" class="sidebar-link {{ request()->routeIs('admin.promos.*') ? 'active' : '' }}">
                    <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor"><path d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A2 2 0 013 12V7a4 4 0 014-4z"/></svg>
                    Promo
                </a>

                <div class="my-3 border-t border-hairline"></div>

                <a href="{{ route('admin.orders.index') }}" class="sidebar-link {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
                    <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    Pesanan
                </a>
                <a href="{{ route('admin.test-drives.index') }}" class="sidebar-link {{ request()->routeIs('admin.test-drives.*') ? 'active' : '' }}">
                    <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Test Drive
                </a>
                <a href="{{ route('admin.users.index') }}" class="sidebar-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                    <svg class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.6" stroke="currentColor"><path d="M12 4.354a4 4 0 110 7.292 4 4 0 010-7.292zM15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    Pengguna
                </a>
            </nav>
        </aside>

        <div class="flex-1 lg:ml-64">
            <header class="sticky top-0 z-30 flex h-16 items-center justify-between border-b border-hairline bg-void/80 backdrop-blur-md px-6 lg:px-10">
                <div class="flex items-center gap-4">
                    <button type="button" id="admin-menu-toggle" class="text-ink lg:hidden" aria-label="Toggle menu">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
                    </button>
                    <h1 class="text-[15px] font-bold text-ink">{{ $title }}</h1>
                </div>
                <div class="flex items-center gap-4">
                    <a href="/" class="text-[13px] font-bold uppercase tracking-[1.5px] text-muted-soft transition-colors hover:text-ink">Lihat Situs</a>
                    <span class="text-[13px] text-muted-soft">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-[13px] font-bold uppercase tracking-[1.5px] text-muted-soft transition-colors hover:text-ink">Keluar</button>
                    </form>
                </div>
            </header>

            <div class="p-6 lg:p-10">
                <x-alert />
                {{ $slot }}
            </div>
        </div>
    </div>

    <nav id="admin-mobile-menu" class="fixed inset-0 z-50 hidden bg-void/95 backdrop-blur-sm lg:hidden">
        <div class="flex h-full flex-col bg-surface">
            <div class="flex h-16 items-center justify-between border-b border-hairline px-6">
                <span class="text-[14px] font-bold text-ink">Menu Admin</span>
                <button type="button" id="admin-menu-close" class="text-ink" aria-label="Tutup menu">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <nav class="flex flex-col gap-1 p-4">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('admin.cars.index') }}" class="sidebar-link {{ request()->routeIs('admin.cars.*') ? 'active' : '' }}">Mobil</a>
                <a href="{{ route('admin.categories.index') }}" class="sidebar-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">Kategori</a>
                <a href="{{ route('admin.news.index') }}" class="sidebar-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}">Berita</a>
                <a href="{{ route('admin.promos.index') }}" class="sidebar-link {{ request()->routeIs('admin.promos.*') ? 'active' : '' }}">Promo</a>
                <div class="my-3 border-t border-hairline"></div>
                <a href="{{ route('admin.orders.index') }}" class="sidebar-link {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">Pesanan</a>
                <a href="{{ route('admin.test-drives.index') }}" class="sidebar-link {{ request()->routeIs('admin.test-drives.*') ? 'active' : '' }}">Test Drive</a>
                <a href="{{ route('admin.users.index') }}" class="sidebar-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">Pengguna</a>
            </nav>
        </div>
    </nav>

    <style>
        .sidebar-link {
            @apply flex items-center gap-3 rounded px-3 py-2 text-[14px] font-light text-muted transition-colors hover:bg-surface-elevated hover:text-ink;
        }
        .sidebar-link.active {
            @apply bg-primary/10 font-medium text-primary-hover;
        }
    </style>

    <script>
        const adminMenuToggle = document.getElementById('admin-menu-toggle');
        const adminMobileMenu = document.getElementById('admin-mobile-menu');
        const adminMenuClose = document.getElementById('admin-menu-close');

        adminMenuToggle?.addEventListener('click', () => {
            adminMobileMenu?.classList.remove('hidden');
        });
        adminMenuClose?.addEventListener('click', () => {
            adminMobileMenu?.classList.add('hidden');
        });
    </script>
</body>
</html>
