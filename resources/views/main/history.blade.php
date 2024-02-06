@extends('main.layouts.main')

@section('content')
<div class="container mx-auto">
  @if (session()->has('success')) 
<div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <div class="ms-3 text-sm font-medium">
        {{ session('success') }}
    </div>
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
    </button>
</div>
@endif
@if (session()->has('failed'))
<div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <div class="ms-3 text-sm font-medium">
        {{ session('failed') }}
    </div>
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
      <span class="sr-only">Close</span>
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
    </button>
  </div>
@endif
  <div class="w-full px-2 py-4 text-2xl font-bold">Riwayat Peminjaman</div>
  <div class="w-full grid grid-cols-1 p-2">
    @if ($rents->isEmpty())
      <div class="p-5 font-bold text-center text-2xl">Tidak Ada Riwayat</div>
    @else
    @foreach ($rents as $rent)
    <div class="w-full flex flex-col px-4 py-1 rounded-lg border-2 border-gray-300 gap-2">
      <div class="w-full flex justify-between items-center text-sm py-0.5 border-b-2">
        <div class="">{{ $rent->tanggal_peminjaman }}</div>
        @php
          if ($rent->status_id == 1) {
            $color = 'bg-blue-600 text-white';
          }
          elseif ($rent->status_id == 2) {
            $color = 'bg-yellow-500 text-white';
          }
          elseif ($rent->status_id == 3) {
            $color = 'bg-green-600 text-white';
          }
          elseif ($rent->status_id == 4) {
            $color = 'bg-red-500 text-white';
          }
          else {
            $color = 'bg-gray-400 text-white';
          }
        @endphp
        <div class="{{ $color }} px-2 py-0.5 rounded-md">{{ $rent->status->name }}</div>
      </div>
      <div class="w-full flex items-center gap-2 pb-1 border-b-2">
        <img src="{{ asset('storage/' . $rent->book->image) }}" class="aspect-[0.66/1] w-1/6 max-w-[104px]" alt="">
        <div class="w-5/6 flex flex-col items-start justify-evenly h-full">
          <span class="text-base font-bold">{{ $rent->book->title }}</span>
          <span class="text-xs">Kode Peminjaman : {{ $rent->kode_peminjaman }}</span>
        </div>
      </div>
        <a href="/history/{{ $rent->kode_peminjaman }}" class="w-fit self-end text-sm px-3 py-1 font-semibold text-blue-600 rounded-full transition duration-150">Lihat Detail</a>
    </div>
    @endforeach
    @endif
    
  </div>
</div>
@endsection