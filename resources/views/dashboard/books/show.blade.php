@extends('dashboard.layouts.main')

@section('content')
<div class="w-full flex justify-start">
  <a href="/dashboard/books" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Back</a>
    <a href="/dashboard/books/{{ $book->slug }}/edit" class="ml-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
    <form action="/dashboard/books/{{ $book->slug }}" method="POST" class="inline">
        @method('delete')
        @csrf
        <button type="submit" onclick="return confirm('Yakin ingin menghapus buku {{ $book->title }} ?')" class="ml-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Remove</button>
</td>
</div>
<div class="h-[1px] bg-gray-400 w-full"></div>
<h2 class="text-2xl font-bold">Detail Buku</h2>
    <div class="w-full flex flex-col gap-2">
      <div class="w-full flex flex-col md:flex-row items-center md:items-start gap-y-2 md:gap-x-2 px-4 py-2">
        <div class="w-full md:w-1/6 flex items-center justify-center">
          <img src="{{ asset('/storage/'.$book->image) }}" alt="" class="object-cover w-full aspect-[6/9]">
        </div>
        <div class="w-full md:w-5/6 flex flex-col h-full md:justify-between gap-y-2">
          <div class="w-full flex flex-col gap-2">
            <h2 class="text-xl font-bold">{{ $book->title }}</h2>
            <h2 class="text-lg">Kategori : {{ $book->category }}</h2>
            <h2 class="text-lg">Genre : {{ $book->genre }}</h2>
          </div>
        </div>
      </div>
      <div class="h-[1px] bg-gray-400 w-full"></div>
      <div class="w-full flex flex-col gap-2">
        <h5 class="font-bold">Deskripsi</h5>
        <p class="text-justify">{{ $book->description }}</p>
      </div>
    </div>
@endsection