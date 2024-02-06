@extends('main.layouts.main')

@section('content')
  <section id="detailRiwayat" class="mt-[76px] w-full py-2">
    <div class="w-full lg:container lg:mx-auto border flex flex-col gap-4">
      <div class="w-full flex items-center px-4 border-b-2">
        <a href="/riwayat"><i class="fa-solid fa-arrow-left fa-lg"></i></a>
        <span class="font-bold text-xl px-4 py-2 ">Detail</span>
      </div>
      <div class="w-full flex flex-col px-4 py-2 items-center justify-between border-b-8 gap-4">
        <div class="w-full flex items-center justify-between">
          <span class="font-semibold text-sm">Status</span>
          @php
              if ($rent->status_id == 1) {
                $color = 'bg-blue-600 text-white';
              }
              elseif ($rent->status_id == 2) {
                $color = 'bg-yellow-600 text-white';
              }
              elseif ($rent->status_id == 3) {
                $color = 'bg-green-600 text-white';
              }
              elseif ($rent->status_id == 4) {
                $color = 'bg-red-500 text-white';
              }
              else {
                $color = 'bg-white border border-red-500 text-red-500';
              }
            @endphp
            <div class="{{ $color }} px-2 py-0.5 rounded-md">{{ $rent->status->name }}</div>
        </div>
      </div>
      <div class="w-full flex flex-col px-4 py-2 gap-4 border-b-8">
        <span class="text-base font-semibold">Detail Peminjaman</span>
        <div class="w-full flex items-center justify-between">
          <span class="text-sm">Buku</span>
          <span class="text-sm font-semibold">{{ $rent->book->title }}</span>
        </div>
        <div class="w-full flex items-center justify-between">
          <span class="text-sm">Peminjam</span>
          <span class="text-sm font-semibold">{{ $rent->user->name }}</span>
        </div>
        <div class="w-full flex items-center justify-between">
          <span class="text-sm">Kode Peminjaman</span>
          <span class="text-sm font-semibold">{{ $rent->kode_peminjaman }}</span>
        </div>
        <div class="w-full flex items-center justify-between">
          <span class="text-sm">Tanggal Peminjaman</span>
          <span class="text-sm font-semibold">{{ $rent->tanggal_peminjaman }}</span>
        </div>
        <div class="w-full flex items-center justify-between">
          <span class="text-sm">Tanggal Pengembalian</span>
          <span class="text-sm font-semibold">{{ $rent->tanggal_pengembalian }}</span>
        </div>
      </div>
      <div class="w-full h-full flex flex-col px-4 py-2 gap-4">
        <span class="text-base font-semibold">Detail Buku</span>
        <a href="/books/{{ $rent->book->slug }}" class="self-center w-fit rounded-md border px-4 py-2 flex flex-col items-center justify-between lg:justify-start gap-2 transition duration-150 hover:bg-gray-200">
          <img src="{{ asset('storage/'.$rent->book->image) }}" alt="" class="max-w-[108px]">
          <div class="flex flex-col justify-between text-sm text-center">
            <span>{{ $rent->book->title }}</span>
            <span>{{ $rent->book->genre }}</span>
          </div>
        </a>
      </div>
      <form action="/history/{{ $rent->kode_peminjaman }}" class="w-full px-4 py-2 flex items-center justify-center" method="POST">
        @csrf
        <input type="hidden" hidden value="{{ $rent->kode_peminjaman }}">
        <button type="submit" class="text-white bg-red-500 px-4 py-2 font-bold rounded-full transition duration-150 hover:bg-red-600">Cancel</button>
      </form>
    </div>
  </section>
@endsection