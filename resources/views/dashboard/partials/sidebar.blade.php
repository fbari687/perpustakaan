<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
     <ul class="space-y-2 font-medium">
        <li>
           <a href="/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ Request::is('dashboard') ? 'bg-gray-700' : '' }} group">
             <div class="flex items-center justify-center w-[20px]">
                 <i class="fa-solid fa-table-columns"></i>
             </div>
              <span class="ms-3">Dashboard</span>
           </a>
        </li>
        <li>
           <a href="/dashboard/books" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ Request::is('dashboard/books*') ? 'bg-gray-700' : '' }} group">
             <div class="flex items-center justify-center w-[20px]">
                 <i class="fa-solid fa-book"></i>
             </div>
              <span class="flex-1 ms-3 whitespace-nowrap">Buku</span>
           </a>
        </li>
        <li>
           <a href="/dashboard/reports" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ Request::is('dashboard/reports*') ? 'bg-gray-700' : '' }} group">
             <div class="flex items-center justify-center w-[20px]">
                 <i class="fa-solid fa-note-sticky"></i>
             </div>
              <span class="flex-1 ms-3 whitespace-nowrap">Laporan</span>
           </a>
        </li>
        <li>
           <a href="/dashboard/members" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ Request::is('dashboard/members*') ? 'bg-gray-700' : '' }} group">
             <div class="flex items-center justify-center w-[20px]">
                 <i class="fa-solid fa-users-between-lines"></i>
             </div>
              <span class="flex-1 ms-3 whitespace-nowrap">Anggota</span>
           </a>
        </li>
        <li>
           <a href="/dashboard/librarians" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ Request::is('dashboard/librarians*') ? 'bg-gray-700' : '' }} group">
             <div class="flex items-center justify-center w-[20px]">
                 <i class="fa-solid fa-address-card"></i>
             </div>
              <span class="flex-1 ms-3 whitespace-nowrap">Pustakawan</span>
           </a>
        </li>
     </ul>
  </div>
</aside>