<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Rent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('main.books', [
            'books' => $books
        ]);
    }

    public function detail(Book $book)
    {
        $dateNow = Carbon::today()->format('Y-m-d');
        $dateNowText = Carbon::parse($dateNow)->translatedFormat('d F Y');
        $backDate = Carbon::parse($dateNow)->addDays(7)->format('Y-m-d');
        $backDateText = Carbon::parse($backDate)->translatedFormat('d F Y');
        if (auth()->check() && auth()->user()->role_id == 3) {
            $rent = Rent::where('user_id', auth()->user()->id)->where('status_id', '!=', 3)->where('status_id', '!=', 4)->where('status_id', '!=', 5)->first();
        } else {
            $rent = "nothing";
        }
        return view('main.book', [
            'book' => $book,
            'dateNow' => $dateNow,
            'dateNowText' => $dateNowText,
            'backDate' => $backDate,
            'backDateText' => $backDateText,
            'rent' => $rent
        ]);
    }
}
