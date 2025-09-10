@extends('layouts.app')

{{-- REGISTRATION PAGE --}}

@section('title', 'Login')

@section('content')
    <div class="full-content relative bg-amber-50 h-[100vh] w-[100vw] flex flex-row     ">

    <div class="forms border-2 rounded-lg mt-[3rem] justify-items-center mx-auto w-[30vw] h-[50vh]">
<form method="POST" action="{{ route ('login')}}">

    <h1 class="text-2xl text-center mt-[1rem]">Login to your account</h1>

    @csrf

    <div class="my-[2rem]">
    <label> Name </label>
    <input type="text" name="name" placeholder="Name" class="border-2 border-gray-600 rounded-md" required>
    </div>
    
    <div class="my-[2rem]">
    <label> Email </label>
    <input type="email" name="email" placeholder="JaneDoe@gmail.com" class="border-2 border-gray-600 rounded-md" required>
    </div>

    <div class="flex justify-items-center flex-col">
    <button type="submit" class="bg-blue-100 px-10 py-3 rounded-lg align-center hover:bg-blue-500 hover:text-white">
       Login
    </button>
    </div>
{{-- 
    @if(session('success'))
        <p> success </p>
    @endif --}}

</form>


    @error('login')
    <p style="color:red">{{ $message }}</p>
@enderror
    </div>

    </div>
@endsection