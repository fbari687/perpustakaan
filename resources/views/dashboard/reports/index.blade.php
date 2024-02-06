@extends('dashboard.layouts.main')

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
                  Kode Peminjaman
              </th>
              <th scope="col" class="px-6 py-3">
                  Judul Buku
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
              <th scope="col" class="px-6 py-3">
                  Tanggal Kembali
              </th>
              <th scope="col" class="px-6 py-3">
                  Status
              </th>
          </tr>
      </thead>
      <tbody>
          @foreach ($rents as $rent)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $rent->kode_peminjaman }}
              </th>
              <td class="px-6 py-4">
                  {{ $rent->book->title }}
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
              <td class="px-6 py-4">
                @if (!$rent->tanggal_kembali)
                    Belum Dikembalikan
                @else
                {{ $rent->tanggal_kembali }}
                @endif
              </td>
              <td class="px-6 py-4">
                @php
                    if ($rent->status_id == 1) {
                        $color = 'bg-blue-600 text-black';
                    }
                    elseif ($rent->status_id == 2) {
                        $color = 'bg-yellow-500 text-black';
                    }
                    elseif ($rent->status_id == 3) {
                        $color = 'bg-green-600 text-black';
                    }
                    elseif ($rent->status_id == 4) {
                        $color = 'bg-red-500 text-black';
                    }
                    else {
                        $color = 'bg-gray-400 text-black';
                    }
                    @endphp
                    <div class="{{ $color }} px-4 py-2 rounded-md text-center font-bold">{{ $rent->status->name }}</div>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
  </div>
@endsection