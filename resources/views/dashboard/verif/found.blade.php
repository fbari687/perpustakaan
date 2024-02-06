@extends('dashboard.layouts.main')

@section('content')
<div class="w-full flex flex-col gap-2">
  <div class="w-full py-2">
    <h1 class="text-2xl md:text-3xl font-bold">Verifikasi Peminjaman</h1>
  </div>
  <hr>
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Kode Peminjaman
            </th>
            <th scope="col" class="px-6 py-3">
                Buku Yang Dipinjam
            </th>
            <th scope="col" class="px-6 py-3">
                Nama Peminjam
            </th>
            <th scope="col" class="px-6 py-3">
                Tanggal Peminjaman
            </th>
            <th scope="col" class="px-6 py-3">
                Tanggal Pengembalian
            </th>
        </tr>
    </thead>
    <tbody>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $rent->kode_peminjaman }}
            </th>
            <td class="px-6 py-4">
                <img src="{{ asset('/storage/'.$rent->book->image) }}" alt="" class="object-cover w-20 aspect-[6/9]">
            </td>
            <td class="px-6 py-4">
                {{ $rent->user->name }}
            </td>
            <td class="px-6 py-4">
                {{ $rent->tanggal_peminjaman }}
            </td>
            <td class="px-6 py-4">
                {{ $rent->tanggal_pengembalian }}
            </td>
        </tr>
    </tbody>
</table>
<form action="/dashboard/verif/found" method="POST">
  @csrf
  <input type="hidden" hidden name="kode_peminjaman" value="{{ $rent->kode_peminjaman }}">
  <div class="w-full flex items-center justify-end">
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Verifikasi</button>
  </div>
</form>
</div>
@endsection