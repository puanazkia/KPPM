<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba Tailwind Sidebar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full font-sans antialiased text-gray-900">

<!--
  This is a pure HTML/Tailwind version of the Catalyst Sidebar Layout.
-->
<div class="flex h-screen overflow-hidden bg-gray-50">

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
          <a href="#" class="bg-gray-50 text-gray-900 group flex rounded-md px-2 pt-2 pb-1 text-sm font-semibold leading-6">
            MAIN NAVIGATION
          </a>
        </div>

        <!-- Quick Actions (Search, Inbox) -->
        <ul role="list" class="-mx-2 space-y-1">
        <li>
          <a href="#" class="bg-gray-50 text-gray-900 group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6">
                  <svg class="h-5 w-5 shrink-0 text-gray-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" /></svg>
                  Home
            </a>
        </li>
        <li>
          <!-- Gunakan tag details/summary agar bisa di-klik buka/tutup tanpa Javascript -->
          <details class="group" open>
            <summary class="flex cursor-pointer gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-blue-600 bg-blue-50/50 hover:bg-blue-50 list-none items-center justify-between">
              <div class="flex items-center gap-x-3">
                <!-- Icon End To End Process (Squares) -->
                <svg class="h-5 w-5 shrink-0 text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                </svg>
                End-to-End Process
              </div>
              <!-- Panah Dropdown -->
              <svg class="h-4 w-4 text-blue-600 transition-transform group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
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
                        <a href="/procurement" class="block rounded-md p-2 text-sm leading-6 text-gray-500 hover:bg-gray-50 hover:text-gray-900">Proses Pengadaan</a>
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
                <a href="#" class="bg-gray-50 text-gray-900 group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6">
                  <svg class="h-5 w-5 shrink-0 text-gray-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" /></svg>
                  Home
                </a>
              </li>
              <li>
                <a href="#" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6">
                  <svg class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor"><path d="M2 3a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H3a1 1 0 01-1-1V3zM2 9a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H3a1 1 0 01-1-1V9zM2 15a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H3a1 1 0 01-1-1v-2z" /></svg>
                  Events
                </a>
              </li>
              <li>
                <a href="#" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6">
                  <svg class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" /></svg>
                  Orders
                </a>
              </li>
              <li>
                <a href="#" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6">
                  <svg class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                  Settings
                </a>
              </li>
            </ul>
          </li>
          
          <!-- Upcoming Events -->
          <li>
            <div class="text-xs font-semibold leading-6 text-gray-400">Upcoming Events</div>
            <ul role="list" class="-mx-2 mt-2 space-y-1">
              <li>
                <a href="#" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6">
                  Bear Hug: Live in Concert
                </a>
              </li>
              <li>
                <a href="#" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6">
                  Viking People
                </a>
              </li>
              <li>
                <a href="#" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6">
                  Six Fingers — DJ Set
                </a>
              </li>
            </ul>
          </li>

          <!-- Footer Navigation (Support/Changelog) -->
          <li class="mt-auto">
             <ul role="list" class="-mx-2 space-y-1">
                <li>
                  <a href="#" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6">
                    <svg class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" /></svg>
                    Support
                  </a>
                </li>
                <li>
                  <a href="#" class="text-gray-700 hover:text-gray-900 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6">
                    <svg class="h-5 w-5 shrink-0 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zm7-10a1 1 0 01.707.293l1 1a1 1 0 010 1.414l-4.5 4.5a1 1 0 01-.32.214l-2 1a1 1 0 01-1.32-.214l-1-1A1 1 0 016 7.293l4.5-4.5A1 1 0 0112 2zm1 14a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z" clip-rule="evenodd" /></svg>
                    Changelog
                  </a>
                </li>
             </ul>
          </li>

        </ul>
      </nav>
    </div>

    <!-- User Profile Dropdown Area (Bottom) -->
    <div class="border-t border-gray-200 p-4">
      <a href="#" class="group block shrink-0">
        <div class="flex items-center">
          <div>
            <img class="inline-block h-9 w-9 rounded-md" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="ml-3">
            <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Erica</p>
            <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">erica@example.com</p>
          </div>
          <svg class="w-4 h-4 ml-auto text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
          </svg>
        </div>
      </a>
    </div>
  </aside>

  <!-- Main Content Layout -->
  <div class="flex flex-1 flex-col h-full">
    
    <!-- Top Navbar for Mobile or Global Actions -->
    <header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-4 sm:px-6 lg:px-8 shrink-0">
      <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">
        <span class="sr-only">Open sidebar</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>

      <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6 justify-end">
        <div class="flex items-center gap-x-4 lg:gap-x-6">
          <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500 hidden lg:block">
            <span class="sr-only">Search</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" /></svg>
          </button>

          <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500">
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>
          </button>

          <!-- Separator -->
          <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-200" aria-hidden="true"></div>

          <!-- Profile dropdown toggle for Mobile/Navbar -->
          <div class="relative">
            <button type="button" class="-m-1.5 flex items-center p-1.5 lg:hidden">
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-md bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
          </div>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <main class="flex-1 overflow-y-auto">
      <div class="py-10 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight mb-8">
          Welcome to Dashboard
        </h1>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
          <p class="text-gray-600 mb-4">
            Ini adalah versi <strong>HTML Murni</strong> dari layout Catalyst yang kamu minta.
          </p>
          <p class="text-gray-600">
            Desainnya sudah disesuaikan agar mirip dengan Catalyst: punya logo di atas, avatar di bawah, efek sentuh (hover) yang rapi, dan menggunakan ikon SVG dari Heroicons.
          </p>
          <div class="mt-6">
            <a href="/procurement" class="text-sm font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Buka halaman Procurement <span aria-hidden="true">&rarr;</span></a>
          </div>
        </div>
      </div>
    </main>

  </div>
</div>

</body>
</html>)
