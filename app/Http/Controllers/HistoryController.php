<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Rent;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view('main.history', [
            'rents' => Rent::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function detail(Rent $rent)
    {
        return view('main.detailHistory', [
            'rent' => $rent
        ]);
    }

    public function cancelRent(Rent $rent)
    {
        $book = Book::where('id', $rent->book->id)->first();

        if ($rent->status_id !== 1) {
            return redirect('/history')->with([
                'failed' => "Gagal Cancel Peminjaman"
            ]);
        }


        $rent->update([
            'status_id' => 5
        ]);

        $book->update([
            'stock_now' => $book->stock_now + 1
        ]);

        return redirect('/history')->with([
            'success' => 'Berhasil Cancel Peminjaman'
        ]);
    }
}
