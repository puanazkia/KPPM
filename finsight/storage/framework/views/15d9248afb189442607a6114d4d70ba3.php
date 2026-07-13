<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pengadaan - FinSight</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F8FAFC; /* Slate 50 */
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body class="text-slate-800 antialiased flex h-screen overflow-hidden">
  <!-- Desktop Sidebar -->
  <aside class="hidden lg:flex lg:w-72 lg:flex-col lg:border-r lg:border-gray-200 lg:bg-white">
    <div class="flex flex-col gap-y-2 overflow-y-auto px-6 pb-4">
      
      <!-- Header (Team/Logo) -->
      <div class="flex shrink-0 items-center mt-4">
        <div class="flex items-center gap-x-3 w-full p-2 hover:bg-gray-50 rounded-lg cursor-pointer">
          <!-- Menggunakan w-auto dan object-contain agar gambar tidak gepeng/lonjong -->
          <img class="h-8 w-auto object-contain rounded-md" src="/logo_finsight.jpeg" alt="Logo FinSight">
        </div>
      </div>

      <!-- Bagian MAIN NAVIGATION dan Menu digabung agar jaraknya dekat -->
      <div class="flex flex-col gap-y-2">
        <!-- Wrapper dengan border-b untuk memunculkan garis -->
        <div class="border-b border-gray-200 pb-0">
          <div class="px-2 pt-2 pb-1 text-sm font-semibold leading-6 text-gray-500 uppercase tracking-wider">
            MAIN NAVIGATION
          </div>
        </div>

        <!-- Quick Actions (Search, Inbox) -->
        <ul role="list" class="-mx-2 space-y-1">
        <li>
          <a href="#" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6">
                  <svg class="h-5 w-5 shrink-0 text-gray-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" /></svg>
                  Home
            </a>
        </li>
        <li>
          <!-- Gunakan tag details/summary agar bisa di-klik buka/tutup tanpa Javascript -->
          <details class="group" open>
            <summary class="flex cursor-pointer gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:text-gray-900 hover:bg-gray-50 list-none items-center justify-between">
              <div class="flex items-center gap-x-3">
                <svg class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                </svg>
                End-to-End Process
            </div>
              <svg class="h-4 w-4 text-gray-400 transition-transform group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </summary>
            
            <!-- Isi dari End to End Process -->
              <li>
                <a href="#" class="flex items-center gap-x-3 rounded-md p-2 pl-10 text-sm leading-6 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                  <svg class="h-5 w-5 shrink-0 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 14.25h6m-6-2.25h6m-6-2.25h6M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" /></svg>
                  Budget Planning
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center gap-x-3 rounded-md p-2 pl-10 text-sm leading-6 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                  <svg class="h-5 w-5 shrink-0 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                  Budget Control
                </a>
              </li>
              
              <!-- Sub-menu Procurement -->
              <li>
                <details class="group/proc" open>
                  <summary class="flex cursor-pointer items-center justify-between rounded-md p-2 pl-10 text-sm leading-6 text-gray-600 hover:bg-gray-50 hover:text-gray-900 list-none">
                    <div class="flex items-center gap-x-3">
                      <!-- Icon Cart -->
                      <svg class="h-5 w-5 shrink-0 text-slate-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" /></svg>
                      Procurement
                    </div>
                    <!-- Panah Sub Dropdown -->
                    <svg class="h-3 w-3 text-gray-400 transition-transform group-open/proc:-rotate-180" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" /></svg>
                  </summary>
                  
                  <ul class="mt-1 space-y-1 border-l-2 border-slate-100 ml-[3.2rem] pl-3">
                    <li>
                      <a href="#" class="block rounded-md p-2 text-sm leading-6 text-gray-500 hover:bg-gray-50 hover:text-gray-900">
                        Procurement & I2P
                      </a>
                    </li>
                    <li>
                        <a href="/procurement" class="block rounded-md p-2 text-sm font-semibold leading-6 text-blue-600 bg-blue-50/50 hover:bg-blue-50">Proses Pengadaan</a>
                    </li>
                  </ul>
                </details>
              </li>
              
              <li>
                <a href="#" class="flex items-center justify-between rounded-md p-2 pl-10 text-sm leading-6 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                  <div class="flex items-center gap-x-3">
                    <svg class="h-5 w-5 shrink-0 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" /></svg>
                    Asset Tracking
                  </div>
                  <svg class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                </a>
              </li>
            </ul>
          </details>
        </li>
      </ul>
      </div>

      <!-- Main Navigation -->
      <nav class="flex flex-1 flex-col mt-4">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
          <li>
            <ul role="list" class="-mx-2 space-y-1">
              <li>
                <details class="group" open>
                  <summary class="flex cursor-pointer gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:text-gray-900 hover:bg-gray-50 list-none items-center justify-between">
                    <div class="flex items-center gap-x-3">
                      <svg class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                      </svg>
                      Financial Performance
                    </div>
                    <svg class="h-4 w-4 text-gray-400 transition-transform group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </summary>
                  
                  <ul class="mt-1 space-y-1 border-l border-slate-200 ml-[1.1rem] pl-3">
                    <li>
                      <a href="#" class="flex items-center gap-x-3 rounded-md p-2 text-sm leading-6 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                        <svg class="h-5 w-5 shrink-0 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>
                        Financial Control
                      </a>
                    </li>
                    <li>
                      <a href="#" class="flex items-center gap-x-3 rounded-md p-2 text-sm leading-6 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                        <svg class="h-5 w-5 shrink-0 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 19.5 16.5h-2.25m-9 0h9l-4.5-4.5m0-3 4.5 4.5M9 16.5v-3M12 16.5v-6m3 6v-9" />
                        </svg>
                        Profitability
                      </a>
                    </li>
                    <li>
                      <a href="#" class="flex items-center gap-x-3 rounded-md p-2 text-sm leading-6 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                        <svg class="h-5 w-5 shrink-0 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        Cost Efficiency
                      </a>
                    </li>
                    <li>
                      <a href="#" class="flex items-center gap-x-3 rounded-md p-2 text-sm leading-6 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                        <svg class="h-5 w-5 shrink-0 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                        </svg>
                        Investment & Return
                      </a>
                    </li>
                  </ul>
                </details>
              </li>
              <li>
                <details class="group">
                  <summary class="flex cursor-pointer gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:text-gray-900 hover:bg-gray-50 list-none items-center justify-between">
                    <div class="flex items-center gap-x-3">
                      <svg class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                      </svg>
                      Efficiency Program
                    </div>
                    <svg class="h-4 w-4 text-gray-400 transition-transform group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </summary>
                </details>
              </li>
              <li>
                <details class="group">
                  <summary class="flex cursor-pointer gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:text-gray-900 hover:bg-gray-50 list-none items-center justify-between">
                    <div class="flex items-center gap-x-3">
                      <svg class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                      </svg>
                      AI Insight
                    </div>
                    <svg class="h-4 w-4 text-gray-400 transition-transform group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </summary>
                </details>
              </li>
            </ul>
          </li>
        
          <div class="flex flex-col gap-y-2">
            <!-- Wrapper dengan border-b untuk memunculkan garis -->
            <div class="border-b border-gray-200 pb-0">
              <div class="px-2 pt-2 pb-1 text-sm font-semibold leading-6 text-gray-500 uppercase tracking-wider">
              MASTER DATA
              </div>
            </div>
          </div>
            <ul role="list" class="-mx-2 space-y-1">
              <li>
                <details class="group">
                  <summary class="flex cursor-pointer gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:text-gray-900 hover:bg-gray-50 list-none items-center justify-between">
                    <div class="flex items-center gap-x-3">
                      <svg class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg>
                      User Access Management
                    </div>
                    <svg class="h-4 w-4 text-gray-400 transition-transform group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </summary>
                </details>
              </li>
              <li>
                <a href="#" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6">
                  <svg class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
                  </svg>
                  Monitoring Log
                </a>
              </li>
            </ul>
      </nav>
    </div>
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
            <form method="GET" action="" class="bg-white rounded-xl shadow-sm border border-slate-100 p-5 mb-8 flex flex-col gap-4">
                
                <div class="flex items-center text-slate-700 font-semibold mb-2">
                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                    Filter Data
                </div>

                <!-- Row 1: 4 Equal Width Dropdowns -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Budget Dropdown -->
                    <div class="relative">
                        <select name="budget" onchange="this.form.submit()" class="w-full appearance-none bg-slate-50 border border-slate-200 text-slate-700 py-2 pl-3 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                            <option value="">All Budget</option>
                            <?php $__currentLoopData = $budgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $budget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($budget->anggaran); ?>" <?php echo e(request('budget') == $budget->anggaran ? 'selected' : ''); ?>><?php echo e($budget->anggaran); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>

                    <!-- Unit Dropdown -->
                    <div class="relative">
                        <select name="unit" onchange="this.form.submit()" class="w-full appearance-none bg-slate-50 border border-slate-200 text-slate-700 py-2 pl-3 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                            <option value="">All Unit</option>
                            <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->category); ?>" <?php echo e(request('unit') == $item->category ? 'selected' : ''); ?>><?php echo e($item->category); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>

                    <!-- Activity Dropdown -->
                    <div class="relative">
                        <select name="activity" onchange="this.form.submit()" class="w-full appearance-none bg-slate-50 border border-slate-200 text-slate-700 py-2 pl-3 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                            <option value="">All Activity</option>
                            <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($activity->activity); ?>" <?php echo e(request('activity') == $activity->activity ? 'selected' : ''); ?>><?php echo e($activity->activity); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>

                    <!-- Tahun Dropdown with Calendar Icon inside input -->
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <select name="tahun" onchange="this.form.submit()" class="w-full appearance-none bg-slate-50 border border-slate-200 text-slate-700 py-2 pl-9 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                            <option value="">Tahun</option>
                            <?php $__currentLoopData = $tahuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tahun->tahun); ?>" <?php echo e($selectedTahun == $tahun->tahun ? 'selected' : ''); ?>><?php echo e($tahun->tahun); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>

                <!-- Row 2: Search/Filter -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-slate-50/50 p-4 rounded-lg mt-2 border border-slate-100">
                    <!-- Nama Pengadaan Dropdown -->
                    <div class="flex items-center">
                        <label class="text-sm text-slate-500 w-36 shrink-0 font-medium">Nama Pengadaan :</label>
                        <div class="relative w-full">
                            <select name="nama_pengadaan" onchange="this.form.submit()" class="w-full appearance-none bg-white border border-slate-200 text-slate-700 py-2 pl-3 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                                <option value="">Semua</option>
                                <?php $__currentLoopData = $namaPengadaans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengadaan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($pengadaan->title); ?>" <?php echo e(request('nama_pengadaan') == $pengadaan->title ? 'selected' : ''); ?>><?php echo e($pengadaan->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Nomor Kontrak Dropdown -->
                    <div class="flex items-center">
                        <label class="text-sm text-slate-500 w-36 shrink-0 font-medium pl-0 md:pl-4">Nomor Kontrak :</label>
                        <div class="relative w-full">
                            <select name="nomor_kontrak" onchange="this.form.submit()" class="w-full appearance-none bg-white border border-slate-200 text-slate-700 py-2 pl-3 pr-8 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 cursor-pointer">
                                <option value="">Semua</option>
                                <?php $__currentLoopData = $nomorKontraks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontrak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($kontrak->doc_number); ?>" <?php echo e(request('nomor_kontrak') == $kontrak->doc_number ? 'selected' : ''); ?>><?php echo e($kontrak->doc_number); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

            <!-- Content Area Placeholder based on design -->
            <!-- Process Flow -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 mb-6">
                <h3 class="text-sm font-bold text-center text-slate-700 mb-8">Jumlah Kegiatan Saat Ini dan Durasi Rata-Rata Antar Pengadaan</h3>
                
                <div class="flex items-center justify-center gap-x-2 gap-y-6 max-w-5xl mx-auto flex-wrap pb-4">
                    
                    <!-- Dok Juskeb -->
                    <div class="bg-slate-100 rounded-xl p-3 text-center w-32 shadow-sm border border-slate-200/60">
                        <div class="text-xs font-semibold text-slate-700 mb-1 h-8 flex items-center justify-center leading-tight">Dok Juskeb</div>
                        <div class="text-4xl font-bold text-slate-700 my-1"><?php echo e(number_format($stageStats['dok_juskeb']['count'] ?? 0, 0, ',', '.')); ?></div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200/70 text-[10px] text-slate-600 rounded px-1 py-1 w-full">Avg : <?php echo e($stageStats['dok_juskeb']['avg_days'] ?? 0); ?> days</div>
                    </div>
                    
                    <svg class="w-4 h-4 text-slate-800 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg>

                    <!-- Permintaan Pengadaan -->
                    <div class="bg-orange-50 rounded-xl p-3 text-center w-32 shadow-sm border border-orange-100/60">
                        <div class="text-xs font-semibold text-slate-700 mb-1 h-8 flex items-center justify-center leading-tight">Permintaan<br>Pengadaan</div>
                        <div class="text-4xl font-bold text-slate-700 my-1"><?php echo e(number_format($stageStats['permintaan_pengadaan']['count'] ?? 0, 0, ',', '.')); ?></div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200/70 text-[10px] text-slate-600 rounded px-1 py-1 w-full">Avg : <?php echo e($stageStats['permintaan_pengadaan']['avg_days'] ?? 0); ?> days</div>
                    </div>
                    
                    <svg class="w-4 h-4 text-slate-800 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg>

                    <!-- Dok Finance -->
                    <div class="bg-purple-50 rounded-xl p-3 text-center w-32 shadow-sm border border-purple-100/60">
                        <div class="text-xs font-semibold text-slate-700 mb-1 h-8 flex items-center justify-center leading-tight">Dok Finance</div>
                        <div class="text-4xl font-bold text-slate-700 my-1"><?php echo e(number_format($stageStats['dok_finance']['count'] ?? 0, 0, ',', '.')); ?></div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200/70 text-[10px] text-slate-600 rounded px-1 py-1 w-full">Avg : <?php echo e($stageStats['dok_finance']['avg_days'] ?? 0); ?> days</div>
                    </div>

                    <svg class="w-4 h-4 text-slate-800 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg>

                    <!-- Pembuatan RKS -->
                    <div class="bg-green-50 rounded-xl p-3 text-center w-32 shadow-sm border border-green-100/60">
                        <div class="text-xs font-semibold text-slate-700 mb-1 h-8 flex items-center justify-center leading-tight">Pembuatan RKS</div>
                        <div class="text-4xl font-bold text-slate-700 my-1"><?php echo e(number_format($stageStats['pembuatan_rks']['count'] ?? 0, 0, ',', '.')); ?></div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200/70 text-[10px] text-slate-600 rounded px-1 py-1 w-full">Avg : <?php echo e($stageStats['pembuatan_rks']['avg_days'] ?? 0); ?> days</div>
                    </div>
                    
                    <svg class="w-4 h-4 text-slate-800 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg>
                    
                    <!-- Rapat Penjelasan -->
                    <div class="bg-blue-50 rounded-xl p-3 text-center w-32 shadow-sm border border-blue-100/60">
                        <div class="text-xs font-semibold text-slate-700 mb-1 h-8 flex items-center justify-center leading-tight">Rapat Penjelasan</div>
                        <div class="text-4xl font-bold text-slate-700 my-1"><?php echo e(number_format($stageStats['rapat_penjelasan']['count'] ?? 0, 0, ',', '.')); ?></div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200/70 text-[10px] text-slate-600 rounded px-1 py-1 w-full">Avg : <?php echo e($stageStats['rapat_penjelasan']['avg_days'] ?? 0); ?> days</div>
                    </div>
                    
                    <svg class="w-4 h-4 text-slate-800 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg>
                    
                    <!-- Evaluasi Proposal -->
                    <div class="bg-slate-100 rounded-xl p-3 text-center w-32 shadow-sm border border-slate-200/60">
                        <div class="text-xs font-semibold text-slate-700 mb-1 h-8 flex items-center justify-center leading-tight">Evaluasi Proposal</div>
                        <div class="text-4xl font-bold text-slate-700 my-1"><?php echo e(number_format($stageStats['evaluasi_proposal']['count'] ?? 0, 0, ',', '.')); ?></div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200/70 text-[10px] text-slate-600 rounded px-1 py-1 w-full">Avg : <?php echo e($stageStats['evaluasi_proposal']['avg_days'] ?? 0); ?> days</div>
                    </div>

                    <!-- Pembuatan HPS -->
                    <div class="bg-blue-50 rounded-xl p-3 text-center w-32 shadow-sm border border-blue-100/60">
                        <div class="text-xs font-semibold text-slate-700 mb-1 h-8 flex items-center justify-center leading-tight">Pembuatan HPS</div>
                        <div class="text-4xl font-bold text-slate-700 my-1"><?php echo e(number_format($stageStats['pembuatan_hps']['count'] ?? 0, 0, ',', '.')); ?></div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200/70 text-[10px] text-slate-600 rounded px-1 py-1 w-full">Avg : <?php echo e($stageStats['pembuatan_hps']['avg_days'] ?? 0); ?> days</div>
                    </div>
                    
                    <svg class="w-4 h-4 text-slate-800 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg>

                    <!-- Negoisasi -->
                    <div class="bg-orange-50 rounded-xl p-3 text-center w-32 shadow-sm border border-orange-100/60">
                        <div class="text-xs font-semibold text-slate-700 mb-1 h-8 flex items-center justify-center leading-tight">Negoisasi</div>
                        <div class="text-4xl font-bold text-slate-700 my-1"><?php echo e(number_format($stageStats['negoisasi']['count'] ?? 0, 0, ',', '.')); ?></div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200/70 text-[10px] text-slate-600 rounded px-1 py-1 w-full">Avg : <?php echo e($stageStats['negoisasi']['avg_days'] ?? 0); ?> days</div>
                    </div>
                    
                    <svg class="w-4 h-4 text-slate-800 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg>

                    <!-- Penetapan -->
                    <div class="bg-purple-50 rounded-xl p-3 text-center w-32 shadow-sm border border-purple-100/60">
                        <div class="text-xs font-semibold text-slate-700 mb-1 h-8 flex items-center justify-center leading-tight">Penetapan</div>
                        <div class="text-4xl font-bold text-slate-700 my-1"><?php echo e(number_format($stageStats['penetapan']['count'] ?? 0, 0, ',', '.')); ?></div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200/70 text-[10px] text-slate-600 rounded px-1 py-1 w-full">Avg : <?php echo e($stageStats['penetapan']['avg_days'] ?? 0); ?> days</div>
                    </div>
                    
                    <svg class="w-4 h-4 text-slate-800 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg>

                    <!-- Dokumen Kontrak -->
                    <div class="bg-green-50 rounded-xl p-3 text-center w-32 shadow-sm border border-green-100/60">
                        <div class="text-xs font-semibold text-slate-700 mb-1 h-8 flex items-center justify-center leading-tight">Dokumen Kontrak</div>
                        <div class="text-4xl font-bold text-slate-700 my-1"><?php echo e(number_format($stageStats['dokumen_kontrak']['count'] ?? 0, 0, ',', '.')); ?></div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200/70 text-[10px] text-slate-600 rounded px-1 py-1 w-full">Avg : <?php echo e($stageStats['dokumen_kontrak']['avg_days'] ?? 0); ?> days</div>
                    </div>
                    
                    <svg class="w-4 h-4 text-slate-800 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg>

                    <!-- Kontrak -->
                    <div class="bg-slate-100 rounded-xl p-3 text-center w-32 shadow-sm border border-slate-200/60">
                        <div class="text-xs font-semibold text-slate-700 mb-1 h-8 flex items-center justify-center leading-tight">Kontrak</div>
                        <div class="text-4xl font-bold text-slate-700 my-1"><?php echo e(number_format($stageStats['kontrak']['count'] ?? 0, 0, ',', '.')); ?></div>
                        <div class="text-[10px] text-slate-500">(Total)</div>
                        <div class="mt-2 bg-slate-200/70 text-[10px] text-slate-600 rounded px-1 py-1 w-full">Avg : <?php echo e($stageStats['kontrak']['avg_days'] ?? 0); ?> days</div>
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
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 flex flex-col min-h-[300px]">
                    <h4 class="text-sm font-semibold text-slate-700 mb-2">Jumlah Persiapan Pengadaan Terhadap Unit</h4>
                    <div id="procurement-qty-chart" class="w-full flex-1 min-h-[220px]"></div>
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
                            <?php $__empty_1 = true; $__currentLoopData = $tableData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="border-b border-slate-50">
                                <td class="py-3 px-4"><?php echo e(str_pad($index + 1, 2, '0', STR_PAD_LEFT)); ?></td>
                                <td class="py-3 px-4 font-medium text-blue-900"><?php echo e($row->nama_pengadaan); ?></td>
                                <td class="py-3 px-4"><?php echo e($row->unit ?? '-'); ?></td>
                                <td class="py-3 px-4"><?php echo e(number_format($row->biaya ?? 0, 2, ',', '.')); ?></td>
                                <td class="py-3 px-4"><?php echo e(number_format($row->biaya_estimasi ?? 0, 2, ',', '.')); ?></td>
                                <td class="py-3 px-4 text-center"><?php echo e(round($row->durasi) ?? 0); ?></td>
                                <td class="py-3 px-4"><?php echo e($row->pola ?? '-'); ?></td>
                                <td class="py-3 px-4"><?php echo e($row->perikatan ?? '-'); ?></td>
                                <td class="py-3 px-4">
                                    <?php if(round($row->durasi) <= 14): ?>
                                        <span class="text-green-500 font-medium">Leading</span>
                                    <?php elseif(round($row->durasi) <= 30): ?>
                                        <span class="text-slate-500 font-medium">On Track</span>
                                    <?php else: ?>
                                        <span class="text-red-500 font-medium">Late</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="9" class="py-8 text-center text-slate-500">Tidak ada data untuk kombinasi filter ini.</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const categories = <?php echo json_encode($cleanedCategories, 15, 512) ?>;
            const series = <?php echo json_encode($chartSeries, 15, 512) ?>;

            const colorsMap = {
                'Penunjukan Langsung': '#0f766e', // Teal 700
                'SP': '#be123c',                  // Rose 700
                'Tender Terbatas': '#b45309',     // Amber 700
                'Pelelangan': '#1d4ed8'           // Blue 700
            };

            const colors = series.map(s => colorsMap[s.name] || '#64748b');

            const options = {
                series: series,
                chart: {
                    type: 'bar',
                    height: '100%',
                    stacked: true,
                    toolbar: {
                        show: false
                    },
                    fontFamily: 'Inter, sans-serif'
                },
                colors: colors,
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '40%',
                        borderRadius: 6,
                        borderRadiusApplication: 'end',
                        borderRadiusWhenStacked: 'last'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 2,
                    colors: ['#fff']
                },
                grid: {
                    borderColor: '#f1f5f9',
                    strokeDashArray: 4,
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                },
                xaxis: {
                    categories: categories,
                    labels: {
                        style: {
                            colors: '#64748b',
                            fontSize: '10px',
                            fontWeight: 500
                        }
                    },
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: '#64748b',
                            fontSize: '11px'
                        }
                    }
                },
                legend: {
                    position: 'bottom',
                    horizontalAlign: 'center',
                    fontSize: '11px',
                    fontWeight: 500,
                    labels: {
                        colors: '#475569'
                    },
                    markers: {
                        width: 10,
                        height: 10,
                        radius: 12
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function (val, { series, seriesIndex, dataPointIndex, w }) {
                            // Hitung total dari kategori ini
                            let total = 0;
                            w.config.series.forEach(s => {
                                total += s.data[dataPointIndex] || 0;
                            });
                            let percentage = total > 0 ? ((val / total) * 100).toFixed(1) : 0;
                            return val + " Pengadaan (" + percentage + "%)";
                        }
                    }
                }
            };

            const chart = new ApexCharts(document.querySelector("#procurement-qty-chart"), options);
            chart.render();
        });
    </script>
</body>
</html>
<?php /**PATH C:\Users\puan\OneDrive\Documents\GitHub\KPPM\finsight\resources\views/procurement.blade.php ENDPATH**/ ?>