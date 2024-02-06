@extends('main.layouts.main')

@section('content')
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <h2 class="text-2xl font-bold">Detail Buku</h2>
    <div class="w-full flex flex-col gap-2">
      <div class="w-full flex flex-col md:flex-row items-center md:items-start gap-y-2 md:gap-x-2 px-4 bg-blue-gray-100 py-2">
        <div class="w-full md:w-1/6 flex items-center justify-center">
          <img src="{{ asset('/storage/'.$book->image) }}" alt="" class="object-cover w-full aspect-[6/9] {{ $book->stock_now <= 0 ? 'grayscale' : '' }}">
        </div>
        <div class="w-full md:w-5/6 flex flex-col h-full md:justify-between gap-y-2">
          <div class="w-full flex flex-col gap-2">
            <h2 class="text-xl font-bold">{{ $book->title }}</h2>
            <h2 class="text-lg">Kategori : {{ $book->category }}</h2>
            <h2 class="text-lg">Genre : {{ $book->genre }}</h2>
          </div>
          @guest
            <a href="/login" class="py-3 px-4 inline-flex w-fit items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 text-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Login Untuk Pinjam Buku</a>
          @endguest
          @can('member')
          @if ($rent)
          <div class="flex flex-col gap-2">
            <div class="font-semibold text-red-500">Saat Ini Kamu Sedang Meminjam Buku / Menunggu Verifikasi</div>
            <div class="font-semibold text-red-500">Kembalikan Buku Untuk Melakukan Peminjaman Lagi</div>
          </div>
          @elseif ($book->stock_now <= 0)
          <div class="flex flex-col gap-2">
            <div class="font-semibold text-red-500">Stok Buku Ini Sudah Habis</div>
          </div>
          @else
          <button type="button" class="py-3 px-4 inline-flex w-fit items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 text-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-custom-backdrop-modal">
            Pinjam Buku
          </button>
          
          <div id="hs-custom-backdrop-modal" class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/90 hidden w-full h-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
              <form action="/rent" class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]" method="POST">
                @csrf
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                  <h3 class="font-bold text-gray-800 dark:text-white">
                    Form Peminjaman Buku
                  </h3>
                  <button type="button" class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-custom-backdrop-modal">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                  </button>
                </div>
                <div class="p-4 overflow-y-auto grid grid-cols-1 gap-2">
                  <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Buku</label>
                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                    <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Judul Buku" required disabled value="{{ $book->title }}">
                    @error('book_id')
                    <p class="text-sm text-red-600 underline">{{ $message }}</p>
                    @enderror
                  </div>
                  <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peminjam</label>
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Peminjam" required disabled value="{{ auth()->user()->name }}">
                    @error('user_id')
                    <p class="text-sm text-red-600 underline">{{ $message }}</p>
                    @enderror
                  </div>
                  <div>
                    <label for="rentDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Peminjaman</label>
                    <input type="hidden" hidden name="tanggal_peminjaman" value="{{ $dateNow }}">
                    <input type="text" id="rentDate" name="rentDate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tanggal Peminjaman" required disabled value="{{ $dateNowText }}">
                    @error('tanggal_peminjaman')
                    <p class="text-sm text-red-600 underline">{{ $message }}</p>
                    @enderror
                  </div>
                  <div>
                    <label for="backDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Pengembalian</label>
                    <input type="hidden" hidden name="tanggal_pengembalian" value="{{ $backDate }}">
                    <input type="text" id="backDate" name="backDate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tanggal Pengembalian" required disabled value="{{ $backDateText }}">
                    @error('tanggal_pengembalian')
                    <p class="text-sm text-red-600 underline">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                  <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-custom-backdrop-modal">
                    Close
                  </button>
                  <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                    Pinjam
                  </button>
                </div>
              </form>
            </div>
          </div>
          @endif
          
          @endcan
          
          
        </div>
      </div>
      <div class="h-[1px] bg-gray-400 w-full"></div>
      <div class="w-full flex flex-col gap-2">
        <h5 class="font-bold">Deskripsi</h5>
        <p class="text-justify">{{ $book->description }}</p>
      </div>
    </div>
  </div>
  
@endsection