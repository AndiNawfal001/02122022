<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body >
@include('partials.navbar')

<div class="lg:flex select-none">
    <div class="lg:basis-1/6 relative hidden lg:block  sidebar">
        @include('partials.sidebar')
    </div>

    <div class="lg:basis-5/6 rounded-lg m-3 p-3 shadow-lg">
        @yield('container')

    </div>
</div>

<script src="{{ asset('js/index.js') }}"></script>
{{-- <script src="{{ "https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" }}"></script> --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>
</html>
