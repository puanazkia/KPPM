<table style="border-collapse: collapse;">
    <!-- INFORMASI FILTER -->
    <thead>
        <tr>
            <th colspan="2" style="background-color: #d9ead3; font-weight: bold; border: 1px solid #000; text-align: left;">INFORMASI FILTER</th>
        </tr>
        <tr>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: left;">Parameter</th>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: left;">Nilai</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #000;">Tahun</td>
            <td style="border: 1px solid #000;">{{ $filters['tahun'] ?: 'Semua' }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #000;">Budget</td>
            <td style="border: 1px solid #000;">{{ $filters['anggaran'] ?: 'Semua' }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #000;">Unit</td>
            <td style="border: 1px solid #000;">{{ $filters['cat'] ?: 'Semua' }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #000;">Activity</td>
            <td style="border: 1px solid #000;">{{ $filters['activity'] ?: 'Semua' }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #000;">Nama Pengadaan</td>
            <td style="border: 1px solid #000;">{{ $filters['nama_pengadaan'] ?: 'Semua' }}</td>
        </tr>
        <tr>
            <td style="border: 1px solid #000;">Nomor Kontrak</td>
            <td style="border: 1px solid #000;">{{ $filters['nomor_kontrak'] ?: 'Semua' }}</td>
        </tr>
        <tr><td colspan="2"></td></tr>
    </tbody>

    <!-- STATISTIK TAHAPAN PENGADAAN -->
    <thead>
        <tr>
            <th colspan="3" style="background-color: #d9ead3; font-weight: bold; border: 1px solid #000; text-align: left;">STATISTIK TAHAPAN PENGADAAN</th>
        </tr>
        <tr>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: left;">Tahapan</th>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: center;">Total Kegiatan</th>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: center;">Rata-Rata Durasi (Hari)</th>
        </tr>
    </thead>
    <tbody>
        @php
            $stageNames = [
                'dok_juskeb' => 'Dok Juskeb',
                'permintaan_pengadaan' => 'Permintaan Pengadaan',
                'dok_finance' => 'Dok Finance',
                'pembuatan_rks' => 'Pembuatan RKS',
                'rapat_penjelasan' => 'Rapat Penjelasan',
                'evaluasi_proposal' => 'Evaluasi Proposal',
                'pembuatan_hps' => 'Pembuatan HPS',
                'negoisasi' => 'Negoisasi',
                'penetapan' => 'Penetapan',
                'dokumen_kontrak' => 'Dokumen Kontrak',
                'kontrak' => 'Kontrak',
            ];
        @endphp
        @foreach($stageNames as $key => $name)
        <tr>
            <td style="border: 1px solid #000;">{{ $name }}</td>
            <td style="border: 1px solid #000; text-align: center;">{{ $stageStats[$key]['count'] ?? 0 }}</td>
            <td style="border: 1px solid #000; text-align: center;">{{ $stageStats[$key]['avg_days'] ?? 0 }}</td>
        </tr>
        @endforeach
        <tr><td colspan="3"></td></tr>
    </tbody>

    <!-- STATISTIK PER UNIT -->
    <thead>
        <tr>
            <th colspan="3" style="background-color: #d9ead3; font-weight: bold; border: 1px solid #000; text-align: left;">STATISTIK PER UNIT</th>
        </tr>
        <tr>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: left;">Unit / Kategori</th>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: center;">Jumlah Pengadaan</th>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: center;">Rata-Rata Hari Pengadaan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cleanedCategories as $index => $category)
        <tr>
            <td style="border: 1px solid #000;">{{ $category }}</td>
            <td style="border: 1px solid #000; text-align: center;">{{ $totalPerUnit[$index] ?? 0 }}</td>
            <td style="border: 1px solid #000; text-align: center;">{{ $avgDurations[$index] ?? 0 }}</td>
        </tr>
        @endforeach
        <tr><td colspan="3"></td></tr>
    </tbody>

    <!-- DATA DETAIL PENGADAAN -->
    <thead>
        <tr>
            <th colspan="9" style="background-color: #d9ead3; font-weight: bold; border: 1px solid #000; text-align: left;">DATA DETAIL PENGADAAN</th>
        </tr>
        <tr>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: center;">No</th>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: left;">Nama Pengadaan</th>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: left;">Nama Unit</th>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: left;">Biaya</th>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: left;">Biaya Estimasi</th>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: center;">Durasi Pengadaan</th>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: left;">Pola</th>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: left;">Perikatan</th>
            <th style="background-color: #f3f3f3; font-weight: bold; border: 1px solid #000; text-align: left;">Leading/Late</th>
        </tr>
    </thead>
    <tbody>
        @foreach($exportData as $index => $row)
        <tr>
            <td style="border: 1px solid #000; text-align: center;">{{ $index + 1 }}</td>
            <td style="border: 1px solid #000;">{{ $row->nama_pengadaan }}</td>
            <td style="border: 1px solid #000;">{{ $row->category ?? '-' }}</td>
            <td style="border: 1px solid #000;">-</td>
            <td style="border: 1px solid #000;">-</td>
            <td style="border: 1px solid #000; text-align: center;">{{ $row->durasi !== null ? round($row->durasi) : '-' }}</td>
            <td style="border: 1px solid #000;">{{ $row->pola ?? '-' }}</td>
            <td style="border: 1px solid #000;">{{ $row->perikatan ?? '-' }}</td>
            <td style="border: 1px solid #000;">-</td>
        </tr>
        @endforeach
    </tbody>
</table>
