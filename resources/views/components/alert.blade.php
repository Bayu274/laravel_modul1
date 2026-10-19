@props(['type' => 'success'])

@if(session('success'))
    <div class="mb-6 border border-green-500/30 bg-green-500/10 px-5 py-4 text-[14px] text-green-400" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="mb-6 border border-red-500/30 bg-red-500/10 px-5 py-4 text-[14px] text-red-400" role="alert">
        {{ session('error') }}
    </div>
@endif
