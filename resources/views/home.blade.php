@extends('layouts.app')

@section('title', 'Home Page')

<head>

<link rel="icon" href="{{ asset('assets/Icon.ico') }}" type="image/x-icon">

</head>

@section('content')

    <h1 class="text-4xl font-bold text-blue-600">Hello Tailwind 🚀</h1>
    <h1 class="text-3xl font-bold text-black">Check H1 tag </h1>
    <button class="bg-blue-700 text-white rounded-2xl px-2.5 hover:bg-blue-300 py-1.5" onclick="window.location='{{ route('registration') }}'">Register!</button>



@endsection

