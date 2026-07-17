<div class="overflow-x-auto">
    <table class="w-full text-left text-sm text-slate-600">
        <thead class="text-xs text-slate-500 font-medium border-b border-slate-100">
            <tr>
                <th class="py-3 px-4">No</th>
                <th class="py-3 px-4">Nama Pengadaan</th>
                <th class="py-3 px-4">Nama Unit</th>
                <th class="py-3 px-4">Biaya</th>
                <th class="py-3 px-4">Biaya Estimasi</th>
                <th class="py-3 px-4 text-center">Durasi Pengadaan</th>
                <th class="py-3 px-4">Pola</th>
                <th class="py-3 px-4">Perikatan</th>
                <th class="py-3 px-4 text-center">Leading/Late</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tableData as $index => $row)
            <tr class="border-b border-slate-50">
                <td class="py-3 px-4">{{ str_pad($tableData->firstItem() + $index, 2, '0', STR_PAD_LEFT) }}</td>
                <td class="py-3 px-4 font-medium text-blue-900">{{ $row->nama_pengadaan }}</td>
                <td class="py-3 px-4">{{ $row->category ?? '-' }}</td>
                <td class="py-3 px-4 text-center text-slate-400">-</td>
                <td class="py-3 px-4 text-center text-slate-400">-</td>
                <td class="py-3 px-4 text-center">{{ $row->durasi !== null ? round($row->durasi) : '-' }}</td>
                <td class="py-3 px-4">{{ $row->pola ?? '-' }}</td>
                <td class="py-3 px-4">{{ $row->perikatan ?? '-' }}</td>
                <td class="py-3 px-4 text-center text-slate-400">-</td>
            </tr>
            @empty
            <tr>
                <td colspan="9" class="py-8 text-center text-slate-500">Tidak ada data untuk kombinasi filter ini.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- Pagination --}}
@if($tableData->hasPages() || $tableData->total() > 0)
<div class="flex flex-col sm:flex-row items-center justify-between mt-5 gap-3">
    {{-- Info record --}}
    <span class="text-sm text-slate-500">
        Showing {{ $tableData->firstItem() ?? 0 }} to {{ $tableData->lastItem() ?? 0 }} of {{ number_format($tableData->total(), 0, ',', '.') }} records
    </span>

    {{-- Navigasi Halaman --}}
    @if($tableData->hasPages())
    <nav class="flex items-center gap-1 pagination-nav">
        {{-- Tombol Sebelumnya --}}
        @if($tableData->onFirstPage())
            <span class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-300 cursor-not-allowed">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </span>
        @else
            <a href="{{ $tableData->previousPageUrl() }}" class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-500 hover:bg-blue-50 hover:text-blue-600 transition-colors ajax-page">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </a>
        @endif

        {{-- Nomor Halaman --}}
        @php
            $currentPage = $tableData->currentPage();
            $lastPage = $tableData->lastPage();
            $delta = 2;
            $range = range(max(1, $currentPage - $delta), min($lastPage, $currentPage + $delta));
            $showFirst = !in_array(1, $range);
            $showLast = !in_array($lastPage, $range);
        @endphp

        @if($showFirst)
            <a href="{{ $tableData->url(1) }}" class="w-8 h-8 flex items-center justify-center rounded-lg text-sm text-slate-600 hover:bg-blue-50 hover:text-blue-600 transition-colors ajax-page">1</a>
            @if(!in_array(2, $range))
                <span class="w-8 h-8 flex items-center justify-center text-slate-400 text-sm">...</span>
            @endif
        @endif

        @foreach($range as $page)
            @if($page == $currentPage)
                <span class="w-8 h-8 flex items-center justify-center rounded-lg bg-blue-600 text-white text-sm font-semibold">{{ $page }}</span>
            @else
                <a href="{{ $tableData->url($page) }}" class="w-8 h-8 flex items-center justify-center rounded-lg text-sm text-slate-600 hover:bg-blue-50 hover:text-blue-600 transition-colors ajax-page">{{ $page }}</a>
            @endif
        @endforeach

        @if($showLast)
            @if(!in_array($lastPage - 1, $range))
                <span class="w-8 h-8 flex items-center justify-center text-slate-400 text-sm">...</span>
            @endif
            <a href="{{ $tableData->url($lastPage) }}" class="w-8 h-8 flex items-center justify-center rounded-lg text-sm text-slate-600 hover:bg-blue-50 hover:text-blue-600 transition-colors ajax-page">{{ $lastPage }}</a>
        @endif

        {{-- Tombol Berikutnya --}}
        @if($tableData->hasMorePages())
            <a href="{{ $tableData->nextPageUrl() }}" class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-500 hover:bg-blue-50 hover:text-blue-600 transition-colors ajax-page">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        @else
            <span class="w-8 h-8 flex items-center justify-center rounded-lg text-slate-300 cursor-not-allowed">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </span>
        @endif
    </nav>
    @endif
</div>
@endif
