<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Perpustakaan</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
{{-- Nav Start --}}
@include('main.partials.navbar')
{{-- Nav End --}}
@yield('content')
{{-- Footer Start --}}
@include('main.partials.footer')
{{-- Footer End --}}
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
</body>
</html>