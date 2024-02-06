@extends('dashboard.layouts.main')

@section('content')
  <div class="w-full flex flex-col gap-2">
    <div class="w-full py-2">
      <h1 class="text-2xl md:text-3xl font-bold">Kembalikan Peminjaman</h1>
    </div>
    <hr>
    <form action="/dashboard/verif" class="w-full flex flex-col gap-y-2" method="POST">
      @csrf
      <div>
        <label for="kode_peminjaman" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Peminjaman</label>
        <input type="text" id="kode_peminjaman" name="kode_peminjaman" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Kode Peminjaman" required value="{{ old('kode_peminjaman') }}">
        @error('kode_peminjaman')
        <p class="text-sm text-red-600 underline">{{ $message }}</p>
        @enderror
        @if (session()->has('failed'))
        <p class="text-sm text-red-600 underline">{{ session('failed') }}</p>
        @endif
      </div>
      <div class="w-full flex items-center justify-end">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
      </div>
    </form>
  </div>
@endsection