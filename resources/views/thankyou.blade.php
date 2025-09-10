@extends ('layouts.app')

@section('title', 'Thankyou')

@section('content')

<div class ="h-[100vh] w-[100vw] bg-black flex flex-col">
    <h1 class="text-8xl font-bold text-white text-center">THANK YOU!</h1>
    <button id="backHome" class="mx-auto bg-blue-300 text-black font-bold w-[8rem] h-auto px-3 py-2 rounded-lg hover:bg-white hover:text-black mt-[2rem]">Back to Home Page </button>
    <script>
        const buttonbh = document.getElementById('backHome');
        buttonbh.addEventListener('click', function(){
            // return view('home')
            window.location.href = "/";
        });
    </script>
</div>







@endsection