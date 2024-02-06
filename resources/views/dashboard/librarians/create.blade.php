@extends('dashboard.layouts.main')

@section('content')
  
<form action="/dashboard/librarians" method="POST">
  @csrf
  <div class="text-2xl font-bold mb-4">Tambah Pustakawan</div>
  <div class="grid gap-6 mb-6 md:grid-cols-1">
      <div>
          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
          <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Pengguna" required value="{{ old('name') }}">
          @error('name')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
      <div>
          <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
          <input type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required value="{{ old('username') }}">
          @error('username')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
      <div>
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
          <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@gmail.com" required value="{{ old('email') }}">
          @error('email')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
      <div>
          <label for="telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Telepon</label>
          <input type="telp" id="telp" name="telp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="08xxxxxxxxxx" required value="{{ old('telp') }}">
          @error('telp')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
      <div>
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
          <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="***" required value="{{ old('password') }}">
          @error('password')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection
