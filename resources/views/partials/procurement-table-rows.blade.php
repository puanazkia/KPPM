@forelse($tableData as $index => $row)
<tr class="border-b border-slate-50 hover:bg-slate-50/50 transition-colors">
    <td class="py-3 px-4 text-slate-500">{{ str_pad($tableData->firstItem() + $index, 2, '0', STR_PAD_LEFT) }}</td>
    <td class="py-3 px-4 font-medium text-blue-900">{{ $row->nama_pengadaan }}</td>
    <td class="py-3 px-4 text-slate-600">{{ $row->category ?? '-' }}</td>
    <td class="py-3 px-4 text-center text-slate-400">-</td>
    <td class="py-3 px-4 text-center text-slate-400">-</td>
    <td class="py-3 px-4 text-center text-slate-700 font-medium">{{ $row->durasi !== null ? round($row->durasi) : '-' }}</td>
    <td class="py-3 px-4 text-slate-600">{{ $row->pola ?? '-' }}</td>
    <td class="py-3 px-4 text-slate-600">{{ $row->perikatan ?? '-' }}</td>
    <td class="py-3 px-4 text-center text-slate-400">-</td>
</tr>
@empty
<tr>
    <td colspan="9" class="py-10 text-center text-slate-400">
        <svg class="w-8 h-8 mx-auto mb-2 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        Tidak ada data untuk kombinasi filter ini.
    </td>
</tr>
@endforelse
