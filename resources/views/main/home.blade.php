@extends('main.layouts.main')

@section('content')
{{-- Hero Start --}}
<div class="relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0">
  <div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
    <svg class="absolute left-0 hidden h-full text-white transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
      <path d="M50 0H100L50 100H0L50 0Z"></path>
    </svg>
    <img
      class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full"
      src="{{ asset('img/perpus.jpg') }}"
      alt=""
    />
  </div>
  <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
    <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
      <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
        Jendela ilmu yang akan membuka cakrawala kehidupan <span class="inline-block text-deep-purple-accent-400">manusia</span>
      </h2>
      <div class="pr-5 mb-5 h-[120px] text-base text-gray-700 md:text-lg">
        <span id="typed">
        </span>
      </div>
        
      <div class="flex items-center">
        <a
          href="/books"
          class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
        >
          Mulai Baca
        </a>
      </div>
    </div>
  </div>
</div>
{{-- Hero End --}}
{{-- Content Start --}}
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">
    <h2 class="max-w-lg mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:mb-6 group">
      <span class="inline-block mb-1 sm:mb-4">
        Pilihan Buku Acak
      </span>
      <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
    </h2>
  </div>
  <div class="grid gap-6 row-gap-5 mb-8 grid-cols-2 lg:grid-cols-4 sm:row-gap-6 sm:grid-cols-2">
    @foreach ($books as $book)
    <a href="/books/{{ $book->slug }}" aria-label="View Item">
      <div class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
        <img class="object-cover w-full aspect-[6/9] {{ $book->stock_now <= 0 ? 'grayscale' : '' }}" src="{{ asset('/storage/'.$book->image) }}" alt="" />
        <div class="absolute inset-0 px-6 py-4 transition-opacity duration-200 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
          <p class="mb-4 text-lg font-bold text-gray-100">{{ $book->title }}</p>
          <p class="text-sm tracking-wide text-gray-300 text-justify line-clamp-4 md:line-clamp-[13]">
            {{ $book->description }}
          </p>
        </div>
      </div>
    </a>
    @endforeach
  </div>
  <div class="text-center">
    <a href="/books" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
      Lihat Lainnya
      <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
        <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
      </svg>
    </a>
  </div>
</div>
{{-- Content End --}}
{{-- Step Start --}}
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">
    <h2 class="max-w-lg mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:mb-6 group">
      <span class="inline-block mb-1 sm:mb-4">
        Langkah-langkah
      </span>
      <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
    </h2>
  </div>
  <div class="grid gap-6 row-gap-10 lg:grid-cols-2">
    <div class="lg:py-6 lg:pr-16">
      <div class="flex">
        <div class="flex flex-col items-center mr-4">
          <div>
            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
              <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
              </svg>
            </div>
          </div>
          <div class="w-px h-full bg-gray-300"></div>
        </div>
        <div class="pt-1 pb-8">
          <p class="mb-2 text-lg font-bold">Langkah 1</p>
          <p class="text-gray-700 text-justify">
            Pengguna Login ke akun masing-masing, jika belum punya akun maka register terlebih dahulu
          </p>
        </div>
      </div>
      <div class="flex">
        <div class="flex flex-col items-center mr-4">
          <div>
            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
              <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
              </svg>
            </div>
          </div>
          <div class="w-px h-full bg-gray-300"></div>
        </div>
        <div class="pt-1 pb-8">
          <p class="mb-2 text-lg font-bold">Langkah 2</p>
          <p class="text-gray-700">
            Pilih buku yang ingin di pinjam
          </p>
        </div>
      </div>
      <div class="flex">
        <div class="flex flex-col items-center mr-4">
          <div>
            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
              <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
              </svg>
            </div>
          </div>
          <div class="w-px h-full bg-gray-300"></div>
        </div>
        <div class="pt-1 pb-8">
          <p class="mb-2 text-lg font-bold">Langkah 3</p>
          <p class="text-gray-700">
            Tekan Pinjam pada halaman buku yang anda pilih
          </p>
        </div>
      </div>
      <div class="flex">
        <div class="flex flex-col items-center mr-4">
          <div>
            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
              <svg class="w-4 text-gray-600" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
              </svg>
            </div>
          </div>
          <div class="w-px h-full bg-gray-300"></div>
        </div>
        <div class="pt-1 pb-8">
          <p class="mb-2 text-lg font-bold">Langkah 4</p>
          <p class="text-gray-700">
            Kamu akan mendapatkan kode peminjaman, kemudian pergilah ke kasir dan minta untuk memverifikasi dengan kode peminjaman yang anda miliki
          </p>
        </div>
      </div>
      <div class="flex">
        <div class="flex flex-col items-center mr-4">
          <div>
            <div class="flex items-center justify-center w-10 h-10 border rounded-full">
              <svg class="w-6 text-gray-600" stroke="currentColor" viewBox="0 0 24 24">
                <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
              </svg>
            </div>
          </div>
        </div>
        <div class="pt-1">
          <p class="mb-2 text-lg font-bold">Buku Berhasil Dipinjam</p>
          <p class="text-gray-700"></p>
        </div>
      </div>
    </div>
    <div class="relative">
      <img
        class="inset-0 object-cover object-bottom w-full rounded shadow-lg h-96 lg:absolute lg:h-full"
        src="{{ asset('img/library.jpg') }}"
        alt=""
      />
    </div>
  </div>
</div>
{{-- Step End --}}
@endsection