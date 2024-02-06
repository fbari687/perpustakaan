@extends('dashboard.layouts.main')

@section('content')
  
<form action="/dashboard/members/{{ $user->id }}" method="POST">
  @csrf
  @method('put')
  <div class="text-2xl font-bold mb-4">Edit Member</div>
  <div class="grid gap-6 mb-6 md:grid-cols-1">
      <div>
          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
          <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Pengguna" required value="{{ old('name', $user->name) }}">
          @error('name')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
      <div>
          <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
          <input type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required value="{{ old('username', $user->username) }}">
          @error('username')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
      <div>
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
          <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@gmail.com" required value="{{ old('email', $user->email) }}">
          @error('email')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
      <div>
          <label for="telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Telepon</label>
          <input type="telp" id="telp" name="telp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="08xxxxxxxxxx" required value="{{ old('telp', $user->telp) }}">
          @error('telp')
          <p class="text-sm text-red-600 underline">{{ $message }}</p>
          @enderror
      </div>
      <div>
        <label for="role_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
        <select id="role_id" name="role_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

          @foreach ($roles as $role)
            <option value="{{ $role->id }}" {{ $role->id == $user->role_id ? 'selected' : '' }}>{{ $role->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="">
        <a href="/dashboard/members/changepassword/{{ $user->id }}" class="bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 px-3 py-1.5 rounded-full">Ganti Password</a>
      </div>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection
