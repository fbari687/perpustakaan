@extends('dashboard.layouts.main')

@section('content')
  
<form action="/dashboard/members/changepassword/{{ $user->id }}" method="POST">
  @csrf
  <div class="text-2xl font-bold mb-4">Ubah Password</div>
  <div class="grid gap-6 mb-6 md:grid-cols-1">
      <div>
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password Baru</label>
          <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Password Baru" required>
          @error('password')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
      <div>
          <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password</label>
          <input type="password" id="confirm_password" name="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Konfirmasi Password" required>
          @error('confirm_password')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection
