<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Document</title> --}}

 <title>@yield('title', 'My Laravel App')</title>

    {{-- Import CSS & JS lewat Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    
 {{-- Navbar atau header bisa di-include di sini
    @include('partials.navbar') --}}

    {{-- Content utama --}}
    <main class="container mx-auto p-6">
        @yield('content')
    </main>
{{-- 
    Footer
    @include('partials.footer') --}}


</body>
</html>