<div class="w-full px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen md:px-24 lg:px-8 border-b-2">
  <div class="relative flex items-center justify-between">
    <ul class="flex items-center hidden gap-8 lg:flex">
      <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Beranda</a></li>
      <li><a href="/books" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Buku</a></li>
    </ul>
    <a href="/" aria-label="Perpustakaan" title="Perpustakaan" class="inline-flex items-center lg:mx-auto">
      <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
        <rect x="3" y="1" width="7" height="12"></rect>
        <rect x="3" y="17" width="7" height="6"></rect>
        <rect x="14" y="1" width="7" height="6"></rect>
        <rect x="14" y="11" width="7" height="12"></rect>
      </svg>
      <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Perpustakaan</span>
    </a>
    @guest
    <ul class="flex items-center hidden gap-8 lg:flex">
      <li><a href="/login" aria-label="Sign in" title="Sign in" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Log in</a></li>
      <li>
        <a
          href="/register"
          class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          aria-label="Sign up"
          title="Sign up"
        >
          Register
        </a>
      </li>
    </ul>
    @endguest
    @auth
    <div class="hs-dropdown relative flex self-end">
      <button id="hs-dropdown-default" type="button" class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border text-white bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700">
        <span class="line-clamp-1">
          {{ auth()->user()->name }}
        </span>
        <svg class="hs-dropdown-open:rotate-180 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
      </button>
    
      <div class="z-10 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] text-white bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 shadow-md rounded-lg p-2 mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" aria-labelledby="hs-dropdown-default">
        <a class="lg:hidden flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:bg-overlay-hover focus:outline-none focus:bg-overlay-hover" href="/">
          Beranda
        </a>
        <a class="lg:hidden flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:bg-overlay-hover focus:outline-none focus:bg-overlay-hover" href="/books">
          Buku
        </a>
        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:bg-overlay-hover focus:outline-none focus:bg-overlay-hover" href="/history">
          Riwayat
        </a>
        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:bg-overlay-hover focus:outline-none focus:bg-overlay-hover" href="/logout">
          Log out
        </a>
      </div>
    </div>
    @endauth
    <!-- Mobile menu -->
    @guest
    <div class="hs-dropdown relative flex self-end lg:hidden">
      <button id="hs-dropdown-default" type="button" class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border text-white bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700">
        <i class="fa-solid fa-bars"></i>
      </button>
    
      <div class="z-10 hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] text-white bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 shadow-md rounded-lg p-2 mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" aria-labelledby="hs-dropdown-default">
        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:bg-overlay-hover focus:outline-none focus:bg-overlay-hover" href="/">
          Beranda
        </a>
        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:bg-overlay-hover focus:outline-none focus:bg-overlay-hover" href="/books">
          Buku
        </a>
        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:bg-overlay-hover focus:outline-none focus:bg-overlay-hover" href="/login">
          Log In
        </a>
        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-white hover:bg-overlay-hover focus:outline-none focus:bg-overlay-hover" href="/register">
          Register
        </a>
      </div>
    </div>
    @endguest
  </div>
</div>