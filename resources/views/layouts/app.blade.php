<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- Title page --}}
  <title>@yield('title')</title>

 @include('partials.app.css')
 @include('partials.app.js')
 @include('partials.app.fonts')

<body>

  <div id="app">
   @include('partials.app.nav')
   <div class="container py-5">
    @yield('content')
  </div>
</div>
<footer class="py-1 bg-ligth">
 <p align="center">Comred Internacional S.A. &copy {{date('Y')}}</p>
</footer>
</body>
</html>