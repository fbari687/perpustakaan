<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-900 text-white">
  {{-- Navbar Start --}}
  @include('dashboard.partials.navbar')
  {{-- Navbar End --}}
  {{-- Sidebar Start --}}
  @include('dashboard.partials.sidebar')
  {{-- Sidebar End --}}
  
  <div class="p-4 sm:ml-64">
     <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
        @yield('content')
     </div>
  </div>
   
  @yield('js')
</body>
</html>