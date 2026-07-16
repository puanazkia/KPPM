@if($tableData->hasPages())
<nav class="flex items-center gap-1">
    {{-- Tombol Sebelumnya --}}
    @if($tableData->onFirstPage())
        <span class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-300 cursor-not-allowed">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </span>
    @else
        <a href="{{ $tableData->previousPageUrl() }}" class="pagination-link w-8 h-8 flex items-center justify-center rounded-lg text-slate-500 hover:bg-blue-50 hover:text-blue-600 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </a>
    @endif

    {{-- Nomor Halaman --}}
    @php
        $currentPage = $tableData->currentPage();
        $lastPage    = $tableData->lastPage();
        $delta       = 2;
        $range       = range(max(1, $currentPage - $delta), min($lastPage, $currentPage + $delta));
        $showFirst   = !in_array(1, $range);
        $showLast    = !in_array($lastPage, $range);
    @endphp

    @if($showFirst)
        <a href="{{ $tableData->url(1) }}" class="pagination-link w-8 h-8 flex items-center justify-center rounded-lg text-sm text-slate-600 hover:bg-blue-50 hover:text-blue-600 transition-colors">1</a>
        @if(!in_array(2, $range))
            <span class="w-8 h-8 flex items-center justify-center text-slate-400 text-sm">...</span>
        @endif
    @endif

    @foreach($range as $page)
        @if($page == $currentPage)
            <span class="w-8 h-8 flex items-center justify-center rounded-lg bg-blue-600 text-white text-sm font-semibold shadow-sm">{{ $page }}</span>
        @else
            <a href="{{ $tableData->url($page) }}" class="pagination-link w-8 h-8 flex items-center justify-center rounded-lg text-sm text-slate-600 hover:bg-blue-50 hover:text-blue-600 transition-colors">{{ $page }}</a>
        @endif
    @endforeach

    @if($showLast)
        @if(!in_array($lastPage - 1, $range))
            <span class="w-8 h-8 flex items-center justify-center text-slate-400 text-sm">...</span>
        @endif
        <a href="{{ $tableData->url($lastPage) }}" class="pagination-link w-8 h-8 flex items-center justify-center rounded-lg text-sm text-slate-600 hover:bg-blue-50 hover:text-blue-600 transition-colors">{{ $lastPage }}</a>
    @endif

    {{-- Tombol Berikutnya --}}
    @if($tableData->hasMorePages())
        <a href="{{ $tableData->nextPageUrl() }}" class="pagination-link w-8 h-8 flex items-center justify-center rounded-lg text-slate-500 hover:bg-blue-50 hover:text-blue-600 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
    @else
        <span class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-300 cursor-not-allowed">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </span>
    @endif
</nav>
@endif
