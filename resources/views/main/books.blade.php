@extends('main.layouts.main')

@section('content')
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <div>
    </div>
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
          <defs>
            <pattern id="7b568941-9ed0-4f49-85a0-5e21ca6c7ad6" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#7b568941-9ed0-4f49-85a0-5e21ca6c7ad6)" width="52" height="24"></rect>
        </svg>
        <span class="relative">Kumpulan</span>
      </span>
      Buku yang tersedia
    </h2>
  </div>
  <div class="grid gap-5 row-gap-5 mb-8 grid-cols-2 lg:grid-cols-4 sm:grid-cols-2">
    @foreach ($books as $book)
    <a href="/books/{{ $book->slug }}" aria-label="View Item" class="inline-block overflow-hidden duration-300 transform bg-white rounded shadow-sm hover:-translate-y-2">
      <div class="flex flex-col h-full">
        <img src="{{ asset('/storage/'.$book->image) }}" class="object-cover w-full aspect-[6/9] {{ $book->stock_now <= 0 ? 'grayscale' : '' }}" alt="" />
        <div class="flex-grow border border-t-0 rounded-b">
          <div class="p-5">
            <p class="mb-2 font-semibold leading-5 line-clamp-1">{{ $book->title }}</p>
            <p class="text-sm text-gray-900 line-clamp-4">
              {{ $book->description }}
            </p>
          </div>
        </div>
      </div>
    </a>
    @endforeach
  </div>
</div>
@endsection