<!DOCTYPE html>
<html lang="en" class="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register Success</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="dark:bg-slate-900 bg-gray-100 flex h-full items-center py-16">
  <main class="w-full max-w-md mx-auto p-6">
    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm text-black dark:bg-gray-800 dark:border-gray-700 dark:text-white p-4 flex flex-col items-center gap-4">
      <span class="text-xl text-center">Berhasil Meregistrasi Akun <br> <span class="font-bold">{{ session('success') }}</span></span>
      <div class="w-full">
        <dotlottie-player src="{{ asset('img/success.json') }}" background="transparent" speed="1" class="w-full" loop autoplay></dotlottie-player>
      </div>
      <a href="/login" class="w-full text-center font-bold py-2 rounded-full transition duration-150 text-white bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700">Login Sekarang</a>
    </div>
  </main>
  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
</body>
</html>