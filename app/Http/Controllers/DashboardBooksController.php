<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.books.index', [
            'books' => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:books,slug',
            'category' => 'required',
            'genre' => 'required',
            'stock_init' => 'required|numeric',
            'stock_now' => 'required|numeric',
            'image' => 'image|file|max:2048',
            'description' => 'required',
        ]);
        $validated['image'] = $request->file('image')->store('book-image');

        $book = Book::create($validated);

        if ($book) {
            return redirect('/dashboard/books')->with([
                'success' => 'Berhasil Menambahkan Buku ' . $validated['title']
            ]);
        } else {
            return redirect('/dashboard/books')->with([
                'failed' => 'Gagal Menambahkan Buku ' . $validated['title']
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('dashboard.books.show', [
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('dashboard.books.edit', [
            'book' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $rules = [
            'title' => 'required',
            'category' => 'required',
            'genre' => 'required',
            'stock_init' => 'required|numeric',
            'stock_now' => 'required|numeric',
            'description' => 'required',
        ];

        if ($request->input('slug') != $book->slug) {
            $rules['slug'] = 'required|unique:books,slug';
        }

        $validated = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('book-image');
        }

        $updatedBook = $book->update($validated);

        if ($updatedBook) {
            return redirect('/dashboard/books')->with([
                'success' => 'Berhasil Mengubah Buku ' . $validated['title']
            ]);
        } else {
            return redirect('/dashboard/books')->with([
                'failed' => 'Gagal Mengubah Buku ' . $validated['title']
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if ($book->image) {
            Storage::delete($book->image);
        }

        $book = Book::findOrFail($book->id);
        $book->delete();
        return redirect('/dashboard/books')->with([
            'success' => 'Berhasil Menghapus Buku ' . $book->title,
        ]);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Book::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
