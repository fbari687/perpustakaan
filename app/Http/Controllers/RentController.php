<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
  public function store(Request $request)
  {
    $validated = $request->validate([
      'user_id' => 'required|exists:users,id',
      'book_id' => 'required|exists:books,id',
      'tanggal_peminjaman' => 'required',
      'tanggal_pengembalian' => 'required'
    ]);

    $kodeTanggal = strrev(str_replace("-", "", $request->input('tanggal_peminjaman')));
    $kodePeminjaman = $kodeTanggal . $request->input('user_id') . $request->input('book_id');

    $validated['status_id'] = 1;
    $validated['kode_peminjaman'] = $kodePeminjaman;

    $rent = Rent::create($validated);

    $book = Book::where("id", $validated['book_id'])->first();
    $stockBook = $book->stock_now;

    $book->update([
      'stock_now' => $stockBook - 1
    ]);

    if ($rent) {
      return redirect('/history')->with('success', 'Berhasil Meminjam Buku, Lanjut Verifikasi');
    } else {
      return redirect()->back();
    }
  }
}
