<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pengadaan - FinSight</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F8FAFC; /* Slate 50 */
        }
    </style>
</head>
<body class="text-slate-800 antialiased flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-slate-200 flex flex-col flex-shrink-0 h-full overflow-y-auto">
        <!-- Logo -->
        <div class="h-16 flex items-center px-6 border-b border-slate-100">
            <svg class="w-6 h-6 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            <span class="text-xl font-bold text-blue-600">FinSight</span>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 px-4 py-6 space-y-8">
            
            <!-- MAIN NAVIGATION -->
            <div>
                <div class="text-xs font-semibold text-slate-400 mb-4 tracking-wider">MAIN NAVIGATION</div>
                <ul class="space-y-1">
                    <li>
                        <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-slate-600 rounded-md hover:bg-slate-50 hover:text-slate-900 group">
                            <svg class="mr-3 w-5 h-5 text-slate-400 group-hover:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            Home
                        </a>
                    </li>
                    
                    <!-- End-to-End Process (Expanded) -->
                    <li>
                        <a href="#" class="flex items-center justify-between px-2 py-2 text-sm font-medium text-blue-600 bg-blue-50/50 rounded-md group">
                            <div class="flex items-center">
                                <svg class="mr-3 w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                                End-to-End Process
                            </div>
                            <svg class="w-4 h-4 text-blue-500 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        
                        <!-- Sub-menu -->
                        <ul class="mt-1 ml-6 space-y-1">
                            <li>
                                <a href="#" class="flex items-center px-2 py-1.5 text-sm font-medium text-slate-500 rounded-md hover:text-slate-900 group">
                                    <svg class="mr-2 w-4 h-4 text-slate-400 group-hover:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                    Budget Planning
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center px-2 py-1.5 text-sm font-medium text-slate-500 rounded-md hover:text-slate-900 group">
                                    <svg class="mr-2 w-4 h-4 text-slate-400 group-hover:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    Budget Control
                                </a>
                            </li>
                            
                            <!-- Procurement (Expanded) -->
                            <li>
                                <a href="#" class="flex items-center justify-between px-2 py-1.5 text-sm font-medium text-slate-700 rounded-md group">
                                    <div class="flex items-center">
                                        <svg class="mr-2 w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                        Procurement
                                    </div>
                                    <svg class="w-3 h-3 text-slate-400 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </a>
                                
                                <!-- Sub-sub-menu -->
                                <ul class="mt-1 ml-6 space-y-1 border-l-2 border-slate-100 pl-2">
                                    <li>
                                        <a href="#" class="block px-2 py-1.5 text-sm font-medium text-slate-500 rounded-md hover:text-slate-900">
                                            Procurement & I2P
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-2 py-1.5 text-sm font-medium text-blue-600 bg-blue-50 rounded-md border-l-2 border-blue-600 -ml-[10px] pl-[10px]">
                                            Proses Pengadaan
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="#" class="flex items-center justify-between px-2 py-1.5 text-sm font-medium text-slate-500 rounded-md hover:text-slate-900 group">
                                    <div class="flex items-center">
                                        <svg class="mr-2 w-4 h-4 text-slate-400 group-hover:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                        Asset Tracking
                                    </div>
                                    <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="flex items-center justify-between px-2 py-2 text-sm font-medium text-slate-600 rounded-md hover:bg-slate-50 hover:text-slate-900 group">
                            <div class="flex items-center">
                                <svg class="mr-3 w-5 h-5 text-slate-400 group-hover:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                                Financial Performance
                            </div>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" class="flex items-center justify-between px-2 py-2 text-sm font-medium text-slate-600 rounded-md hover:bg-slate-50 hover:text-slate-900 group">
                            <div class="flex items-center">
                                <svg class="mr-3 w-5 h-5 text-slate-400 group-hover:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                Efficiency Program
                            </div>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#" class="flex items-center justify-between px-2 py-2 text-sm font-medium text-slate-600 rounded-md hover:bg-slate-50 hover:text-slate-900 group">
                            <div class="flex items-center">
                                <svg class="mr-3 w-5 h-5 text-slate-400 group-hover:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                                AI Insight
                            </div>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- MASTER DATA -->
            <div>
                <div class="text-xs font-semibold text-slate-400 mb-4 tracking-wider">MASTER DATA</div>
                <ul class="space-y-1">
                    <li>
                        <a href="#" class="flex items-center justify-between px-2 py-2 text-sm font-medium text-slate-600 rounded-md hover:bg-slate-50 hover:text-slate-900 group">
                            <div class="flex items-center">
                                <svg class="mr-3 w-5 h-5 text-slate-400 group-hover:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                User Access Management
                            </div>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-slate-600 rounded-md hover:bg-slate-50 hover:text-slate-900 group">
                            <svg class="mr-3 w-5 h-5 text-slate-400 group-hover:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            Monitoring Log
                        </a>
                    </li>
                </ul>
            </div>
            
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col h-full overflow-hidden bg-slate-50">
        
        <!-- Top Navbar -->
        <header class="h-16 flex items-center justify-between px-8 bg-transparent border-b border-transparent">
            <div>
                <!-- Hamburger if needed -->
            </div>
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center font-bold text-lg">
                    A
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="flex-1 overflow-auto p-8">
            
            <!-- Page Header -->
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-blue-600 mb-1">Proses Pengadaan</h1>
            </div>

            <!-- Filters Section -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-5 mb-8">
                
                <!-- Row 1: Filters -->
                <div class="flex flex-wrap items-center gap-3 mb-4">
                    <div class="flex items-center text-slate-400 mr-2">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                        <span class="text-sm font-medium">Filters :</span>
                    </div>

                    <!-- Progress Dropdown -->
                    <div class="relative min-w-[140px]">
                        <select name="progress" class="w-full appearance-none bg-slate-50 border border-slate-200 text-slate-700 py-2 pl-3 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                            <option value="">All Progress</option>
                            @foreach($progresses as $progress)
                                <option value="{{ $progress->nama_program }}">{{ $progress->nama_program }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                    
                    <!-- Budget Dropdown -->
                    <div class="relative min-w-[140px]">
                        <select name="budget" class="w-full appearance-none bg-slate-50 border border-slate-200 text-slate-700 py-2 pl-3 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                            <option value="">All Budget</option>
                            @foreach($budgets as $budget)
                                <option value="{{ $budget->anggaran }}">{{ $budget->anggaran }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>

                    <!-- Unit Dropdown -->
                    <div class="relative min-w-[140px]">
                        <select name="unit" class="w-full appearance-none bg-slate-50 border border-slate-200 text-slate-700 py-2 pl-3 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                            <option value="">All Unit</option>
                            @foreach($units as $unit)
                                <option value="{{ $unit->unit }}">{{ $unit->unit }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>

                    <!-- Sub Unit Dropdown -->
                    <div class="relative min-w-[140px]">
                        <select name="sub_unit" class="w-full appearance-none bg-slate-50 border border-slate-200 text-slate-700 py-2 pl-3 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                            <option value="">All Sub Unit</option>
                            @foreach($subUnits as $subUnit)
                                <option value="{{ $subUnit->cat }}">{{ $subUnit->cat }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>

                    <!-- Activity Dropdown -->
                    <div class="relative min-w-[140px]">
                        <select name="activity" class="w-full appearance-none bg-slate-50 border border-slate-200 text-slate-700 py-2 pl-3 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                            <option value="">All Activity</option>
                            @foreach($activities as $activity)
                                <option value="{{ $activity->activity }}">{{ $activity->activity }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>

                    <!-- Tahun Dropdown with Calendar Icon inside input -->
                    <div class="relative min-w-[100px] ml-auto">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <select name="tahun" class="w-full appearance-none bg-slate-50 border border-slate-200 text-slate-700 py-2 pl-9 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                            <option value="">Tahun</option>
                            @foreach($tahuns as $tahun)
                                <option value="{{ $tahun->tahun }}">{{ $tahun->tahun }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>

                <!-- Row 2: Search/Filter -->
                <div class="flex flex-wrap items-center gap-4 bg-slate-50/50 p-2 rounded-lg">
                    <!-- Nama Pengadaan Dropdown -->
                    <div class="flex items-center flex-1 min-w-[200px]">
                        <label class="text-sm text-slate-500 w-36 shrink-0 font-medium">Nama Pengadaan :</label>
                        <div class="relative w-full">
                            <select name="nama_pengadaan" class="w-full appearance-none bg-white border border-slate-200 text-slate-700 py-2 pl-3 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                                <option value="">Semua</option>
                                @foreach($namaPengadaans as $pengadaan)
                                    <option value="{{ $pengadaan->title }}">{{ $pengadaan->title }}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Nomor Kontrak Dropdown -->
                    <div class="flex items-center flex-1 min-w-[200px]">
                        <label class="text-sm text-slate-500 w-32 shrink-0 font-medium">Nomor Kontrak :</label>
                        <div class="relative w-full">
                            <select name="nomor_kontrak" class="w-full appearance-none bg-white border border-slate-200 text-slate-700 py-2 pl-3 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                                <option value="">Semua</option>
                                @foreach($nomorKontraks as $kontrak)
                                    <option value="{{ $kontrak->doc_number }}">{{ $kontrak->doc_number }}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Vendor Dropdown -->
                    <div class="flex items-center flex-1 min-w-[200px]">
                        <div class="relative w-full">
                            <select name="vendor" class="w-full appearance-none bg-white border border-slate-200 text-slate-700 py-2 pl-3 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                                <option value="">All Vendor</option>
                                @foreach($vendors as $vendor)
                                    <option value="{{ $vendor->vendor }}">{{ $vendor->vendor }}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Content Area Placeholder based on design -->
            <!-- Process Flow -->
            <div class="bg-slate-100 rounded-xl p-6 mb-6">
                <h3 class="text-sm font-semibold text-center text-slate-700 mb-6">Jumlah Kegiatan Saat Ini dan Durasi Rata-Rata Antar Pengadaan</h3>
                
                <div class="flex items-center justify-between gap-2 max-w-5xl mx-auto flex-wrap pb-4">
                    <!-- Cards -->
                    <!-- Dok Juskeb -->
                    <div class="bg-blue-50 rounded-lg p-4 text-center w-36 shadow-sm border border-blue-100">
                        <div class="text-xs font-semibold text-slate-700 mb-1">Dok Juskeb</div>
                        <div class="text-3xl font-bold text-slate-800">0</div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200 h-1.5 w-full rounded-full"></div>
                    </div>
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>

                    <!-- Permintaan Pengadaan -->
                    <div class="bg-orange-50 rounded-lg p-4 text-center w-36 shadow-sm border border-orange-100">
                        <div class="text-xs font-semibold text-slate-700 mb-1">Permintaan<br>Pengadaan</div>
                        <div class="text-3xl font-bold text-slate-800">0</div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200 text-[10px] text-slate-600 rounded px-1 py-0.5">Avg : 12 days</div>
                    </div>
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>

                    <!-- Dok Finance -->
                    <div class="bg-purple-50 rounded-lg p-4 text-center w-36 shadow-sm border border-purple-100">
                        <div class="text-xs font-semibold text-slate-700 mb-1">Dok Finance</div>
                        <div class="text-3xl font-bold text-slate-800">0</div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200 text-[10px] text-slate-600 rounded px-1 py-0.5">Avg : 12 days</div>
                    </div>
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>

                    <!-- Pembuatan RKS -->
                    <div class="bg-green-50 rounded-lg p-4 text-center w-36 shadow-sm border border-green-100">
                        <div class="text-xs font-semibold text-slate-700 mb-1">Pembuatan RKS</div>
                        <div class="text-3xl font-bold text-slate-800">1</div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200 text-[10px] text-slate-600 rounded px-1 py-0.5">Avg : 21 days</div>
                    </div>
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    
                    <!-- Rapat Penjelasan -->
                    <div class="bg-blue-50 rounded-lg p-4 text-center w-36 shadow-sm border border-blue-100">
                        <div class="text-xs font-semibold text-slate-700 mb-1">Rapat Penjelasan</div>
                        <div class="text-3xl font-bold text-slate-800">0</div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200 text-[10px] text-slate-600 rounded px-1 py-0.5">Avg : 12 days</div>
                    </div>
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    
                    <!-- Evaluasi Proposal -->
                    <div class="bg-blue-100 rounded-lg p-4 text-center w-36 shadow-sm border border-blue-200">
                        <div class="text-xs font-semibold text-slate-700 mb-1">Evaluasi Proposal</div>
                        <div class="text-3xl font-bold text-slate-800">1</div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200 text-[10px] text-slate-600 rounded px-1 py-0.5">Avg : 12 days</div>
                    </div>
                </div>
            </div>
            
            <!-- Dashboard bottom half just as placeholder to match layout -->
            <div class="grid grid-cols-2 gap-6 mb-6">
                <!-- Chart 1 -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 flex flex-col items-center justify-center min-h-[300px]">
                    <h4 class="text-sm font-semibold text-slate-700 mb-4">Rata-rata Hari Pengadaan Terhadap Unit</h4>
                    <div class="flex items-end gap-4 h-40 w-full justify-center mt-4">
                        <!-- Bars Mock -->
                        <div class="w-8 bg-teal-400 h-10 rounded-t relative"><span class="absolute -top-5 left-1 text-xs">5</span></div>
                        <div class="w-8 bg-teal-500 h-32 rounded-t relative"><span class="absolute -top-5 left-1 text-xs">42</span></div>
                        <div class="w-8 bg-orange-400 h-28 rounded-t relative"><span class="absolute -top-5 left-1 text-xs">38</span></div>
                        <div class="w-8 bg-orange-400 h-16 rounded-t relative"><span class="absolute -top-5 left-1 text-xs">22</span></div>
                        <div class="w-8 bg-red-500 h-12 rounded-t relative"><span class="absolute -top-5 left-1 text-xs">14</span></div>
                        <div class="w-8 bg-red-600 h-8 rounded-t relative"><span class="absolute -top-5 left-2 text-xs">7</span></div>
                    </div>
                </div>
                
                <!-- Chart 2 -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 flex flex-col items-center justify-center min-h-[300px]">
                    <h4 class="text-sm font-semibold text-slate-700 mb-4">Jumlah persiapan pengadaan terhadap unit</h4>
                    <div class="flex items-end gap-16 h-40 w-full justify-center mt-4 border-l border-b border-slate-200 pb-2 pl-2">
                        <!-- Bars Mock -->
                        <div class="w-10 bg-orange-400 h-20 relative text-center"><span class="absolute -bottom-8 left-0 text-[10px] w-full text-slate-500">ACCESS NETWORK</span></div>
                        <div class="w-10 bg-orange-400 h-4 relative text-center"><span class="absolute -bottom-8 left-0 text-[10px] w-full text-slate-500">E-CATALOGUE</span></div>
                        <div class="w-10 bg-orange-400 h-10 relative text-center"><span class="absolute -bottom-8 left-0 text-[10px] w-full text-slate-500">GOODS & SERVICES</span></div>
                        <div class="w-10 bg-orange-400 h-8 relative text-center"><span class="absolute -bottom-8 left-0 text-[10px] w-full text-slate-500">IT & TECHNOLOGY</span></div>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
                <div class="flex justify-between items-center mb-4 border-b border-slate-100 pb-2">
                    <h4 class="text-sm font-bold text-slate-800 border-b-2 border-blue-600 pb-2 inline-block -mb-[2px]">Detailed Cycle Time Data</h4>
                    <div class="text-sm text-slate-500 flex items-center cursor-pointer">
                        05 rows 
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </div>
                
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
                                <th class="py-3 px-4">Leading/Late</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-slate-50">
                                <td class="py-3 px-4">01</td>
                                <td class="py-3 px-4 font-medium text-blue-900">SP Restrukturisasi TITO INTI STO Jagir</td>
                                <td class="py-3 px-4">Group Procurement Center</td>
                                <td class="py-3 px-4">0,00</td>
                                <td class="py-3 px-4">0,00</td>
                                <td class="py-3 px-4 text-center">8</td>
                                <td class="py-3 px-4">Penunjukan Langsung</td>
                                <td class="py-3 px-4">Lumsum</td>
                                <td class="py-3 px-4 text-green-500 font-medium">Leading</td>
                            </tr>
                            <tr class="border-b border-slate-50">
                                <td class="py-3 px-4">02</td>
                                <td class="py-3 px-4 font-medium text-blue-900">SP Restrukturisasi TITO INTI STO Jagir</td>
                                <td class="py-3 px-4">Group Procurement Center</td>
                                <td class="py-3 px-4">0,00</td>
                                <td class="py-3 px-4">0,00</td>
                                <td class="py-3 px-4 text-center">42</td>
                                <td class="py-3 px-4">Tender Terbatas</td>
                                <td class="py-3 px-4">KHS</td>
                                <td class="py-3 px-4 text-slate-500 font-medium">Cancelled</td>
                            </tr>
                            <tr class="border-b border-slate-50">
                                <td class="py-3 px-4">03</td>
                                <td class="py-3 px-4 font-medium text-blue-900">SP Restrukturisasi TITO INTI STO Jagir</td>
                                <td class="py-3 px-4">Group Procurement Center</td>
                                <td class="py-3 px-4">0,00</td>
                                <td class="py-3 px-4">0,00</td>
                                <td class="py-3 px-4 text-center">38</td>
                                <td class="py-3 px-4">SP</td>
                                <td class="py-3 px-4">Lumsum</td>
                                <td class="py-3 px-4 text-red-500 font-medium">Late</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
</body>
</html>
