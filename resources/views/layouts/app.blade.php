<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('titulo','Little Berry')</title>
  @vite('resources/css/app.css')
</head>
<body>
  <header>
    @include('layouts.navbar')
  </header>

  <main>
    @yield('page-content')
  </main>
  <footer>   
    @include('layouts.footer')
  </footer>   


</body>
</html>