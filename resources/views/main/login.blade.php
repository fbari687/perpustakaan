<!DOCTYPE html>
<html lang="en" class="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="dark:bg-slate-900 bg-gray-100 flex flex-col h-full items-center">
  @include('main.partials.navbar')
  <main class="w-full max-w-md mx-auto p-6">
    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
      <form action="/login" method="POST" class="p-4 sm:p-7">
        @csrf
        <div class="text-center">
          <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Log in</h1>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
            Belum Punya Akun?
            <a class="text-blue-600 decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/register">
              Register Disini
            </a>
          </p>
        </div>

        <div class="mt-5">

          <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 before:me-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ms-6 dark:text-gray-500 dark:before:border-gray-600 dark:after:border-gray-600">Login</div>

          <!-- Form -->
          <form>
            <div class="grid gap-y-4">
              <!-- Form Group -->
              <div>
                <label for="username" class="block text-sm mb-2 dark:text-white">Username</label>
                <div class="relative">
                  <input type="text" id="username" name="username" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="email-error">
                  <div class="hidden absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                    <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                  </div>
                </div>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div>
                <div class="flex justify-between items-center">
                  <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                </div>
                <div class="relative">
                  <input type="password" id="password" name="password" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="password-error">
                  <div class="hidden absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                    <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                  </div>
                </div>
                @if (session()->has('failed'))
                <p class="text-xs text-red-600 mt-2" id="password-error">{{ session('failed') }}</p>
                @endif
                  
              </div>
              <!-- End Form Group -->


              <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Log in</button>
            </div>
          </form>
          <!-- End Form -->
        </div>
      </form>
    </div>
  </main>
</body>
</html>