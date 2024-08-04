<aside 
    x-data="{ isOpen: true, logoIsOpen: true }" 
    x-init="$watch('logoIsOpen', value => { isOpen = value; })"
    @mouseover="if (!logoIsOpen) { isOpen = true; $dispatch('button-navbar', isOpen); }"
    @mouseleave="if (!logoIsOpen) { isOpen = false; $dispatch('button-navbar', isOpen); }"
    id="default-sidebar" 
    :class="isOpen ? 'w-48' : 'w-16'" 
    class="fixed top-0 left-0 z-40 h-screen bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700" 
    aria-label="Sidenav">
    <div class="overflow-y-auto py-5 px-3 h-full">
        <ul class="space-y-2 pb-5">
            <li class="relative flex justify-between items-center p-1 text-base font-normal h-10">
                <a 
                    x-show="isOpen" 
                    href="/" 
                    class="text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <img class="h-8 w-8" src="img/ps.png" alt="My Company">
                </a>
                <button 
                    class="h-8 w-8 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group" 
                    type="button" 
                    @click="logoIsOpen = !logoIsOpen; $dispatch('button-navbar', logoIsOpen)">
                    <div class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i x-show="!logoIsOpen" class="fa-solid fa-bars"></i>
                        <i x-show="logoIsOpen" class="fa-solid fa-bars-staggered"></i>
                    </div>
                </button>
              </li>
          </ul>
          <ul class="space-y-2">
            <li class="h-10">
                <a href="/" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <div class="h-4 w-4 flex items-center"><i class="fa-solid fa-house"></i></div>
                    <div x-show="isOpen" class="ml-3 text-xs">Home</div>
                </a>
            </li>
            <li class="h-10">
                <a href="/dataTransaksi" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <div class="h-4 w-4 flex items-center"><i class="fa-solid fa-coins"></i></div>
                    <div x-show="isOpen" class="ml-3 text-xs">Data Transaksi</div>
                </a>
            </li>
            <li class="h-10">
                <a href="/laporanTransaksi" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <div class="h-4 w-4 flex items-center"><i class="fa-solid fa-print"></i></div>
                    <div x-show="isOpen" class="ml-3 text-xs">Laporan Transaksi</div>
                </a>
            </li>
            <li class="h-10">
                <a href="/dataMember" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <div class="h-4 w-4 flex items-center"><i class="fa-solid fa-people-group"></i></div>
                    <div x-show="isOpen" class="ml-3 text-xs">Data Member</div>
                </a>
            </li>
            <li class="h-10">
                <a href="/dataPerangkat" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <div class="h-4 w-4 flex items-center"><i class="fa-brands fa-playstation"></i></div>
                    <div x-show="isOpen" class="ml-3 text-xs">Data Perangkat</div>
                </a>
            </li>
            <li class="h-10">
                <a href="/dataPetugas" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <div class="h-4 w-4 flex items-center"><i class="fa-solid fa-user"></i></div>
                    <div x-show="isOpen" class="ml-3 text-xs">Data Petugas</div>
                </a>
            </li>
            <li class="h-10">
                <a href="/settingApp" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <div class="h-4 w-4 flex items-center"><i class="fa-solid fa-gear"></i></div>
                    <div x-show="isOpen" class="ml-3 text-xs">Setting App</div>
                </a>
            </li>
          </ul>
      </div>
  </aside>

