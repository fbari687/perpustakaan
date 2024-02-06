@extends('dashboard.layouts.main')

@section('content')
  
<form action="/dashboard/books" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="text-2xl font-bold mb-4">Tambah Buku</div>
  <div class="grid gap-6 mb-6 md:grid-cols-1">
      <div>
          <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Buku</label>
          <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Judul Buku" required value="{{ old('title') }}">
          @error('title')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
      <input type="hidden" name="slug" id="slug" value="{{ old('slug') }}">
      <div>
          <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
          <input type="text" id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cth: Komik" required value="{{ old('category') }}">
          @error('category')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
      <div>
          <label for="genre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Genre</label>
          <input type="text" id="genre" name="genre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cth: romance" required value="{{ old('genre') }}">
          @error('genre')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>  
      <div>
        <label for="quantity-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok Awal</label>
        <div class="relative flex items-center max-w-[8rem]">
        <button type="button" id="decrement-button" data-input-counter-decrement="stock_init" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
            </svg>
        </button>
        <input type="text" id="stock_init" name="stock_init" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required value="{{ old('stock_init') }}">
        <button type="button" id="increment-button" data-input-counter-increment="stock_init" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
        </button>
        </div>
        <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Pilih Stok Awal</p>
        @error('stock_init')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
      <div>
        <label for="quantity-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok Sekarang</label>
        <div class="relative flex items-center max-w-[8rem]">
        <button type="button" id="decrement-button" data-input-counter-decrement="stock_now" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
            </svg>
        </button>
        <input type="text" id="stock_now" name="stock_now" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required value="{{ old('stock_now') }}">
        <button type="button" id="increment-button" data-input-counter-increment="stock_now" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
            <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
        </button>
        </div>
        <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Pilih Stok Sekarang</p>
        @error('stock_now')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
      <div>
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ketikkan Deskripsi Buku Disini...">{{ old('description') }}</textarea>
      </div>
      <div>
        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Image</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="image" aria-describedby="file_input_help" id="image" type="file" onchange="previewImage()" value="{{ old('image') }}">
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG (Max: 2mb).</p>
        <img src="" alt="" id="imagePreview" class="w-20 self-center">
        @error('image')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection

@section('js')
<script>
  function previewImage() {
        const preview = document.getElementById('imagePreview');
        const fileInput = document.getElementById('image');
        const file = fileInput.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }
  const title = document.getElementById('title');
    const slug = document.getElementById('slug');

    title.addEventListener('input', async function() {
      await fetch('/dashboard/books/add/checkSlug?title=' + title.value).then(response => response.json()).then(data => slug.value = data.slug);
    });
</script>
@endsection