@props([
    'title' => 'Konfirmasi',
    'message' => 'Apakah kamu yakin?',
    'id' => 'confirm-modal',
])

<div id="{{ $id }}" class="fixed inset-0 z-50 hidden items-center justify-center bg-void/80 backdrop-blur-sm">
    <div class="mx-4 w-full max-w-md rounded border border-hairline bg-surface p-6">
        <h3 class="text-[18px] font-bold text-ink">{{ $title }}</h3>
        <p class="mt-2 text-[14px] font-light text-muted">{{ $message }}</p>
        <div class="mt-6 flex justify-end gap-3">
            <button type="button" onclick="document.getElementById('{{ $id }}').classList.add('hidden'); document.getElementById('{{ $id }}').classList.remove('flex');" class="btn-secondary !h-10 !px-5 !text-[13px]">Batal</button>
            {{ $slot }}
        </div>
    </div>
</div>
