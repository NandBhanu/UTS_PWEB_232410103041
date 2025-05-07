<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') — Rekomendasi Film</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    @if (!Request::is('login'))
        @include('components.navbar')
    @endif


    <div class="min-h-screen">
        @yield('content')
    </div>

    @if (!Request::is('login') && !Request::is('register'))
        @include('components.footer')
    @endif

</body>
</html>
