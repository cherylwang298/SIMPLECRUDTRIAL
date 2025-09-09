@extends('layouts.app')

@section('title', 'Home Page')

<head>

<link rel="icon" href="{{ asset('assets/Icon.ico') }}" type="image/x-icon">

<style>
.banner{
    width: 100%;
    height: 100%;
    text-align: center;
    overflow: hidden;
    position: relative;
}

body{
    margin: 0 !important;
    padding: 0 !important;
}

.banner .slider{
    position: absolute;
    width: 250px;
    height: 250px;
    top: 10%;
    left: calc(50% - 100px);
    transform-style: preserve-3d;
    transform: perspective(1000px);
    animation: autoRun 30s linear infinite;
    margin: auto;
    z-index: 2;

transition: animation-duration 1s ease;
}

/* .banner .slider:hover{
animation-duration: 50s;
} */


@keyframes autoRun{
    from{
        transform: perspective(1000px) rotateX(-16deg) rotateY(0deg);
    }
    to{
        transform: perspective(1000px) rotateX(-16deg) rotateY(360deg);
    }
}

.banner .slider .item{
    position: absolute;
    inset: 0 0 0 0;
    transform: 
    rotateY(calc( (var(--position) - 1) *  (360 / var(--quantity)) *1deg ))
    translateZ(550px);
}

.banner .slider .item img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.banner .content{
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: min(1400px, 100vw);
    height: max-content;
    padding-bottom: 100px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}

.banner .content .model{
    background-image: url("{{ asset('assets/picturess/happyMascot.png.png') }}");
    width: 100%;
    height: 75vh;
    position: absolute;
    bottom: 0;
    left: 0;
    background-size: auto 130%;
    background-repeat: no-repeat;
    background-position: top center;
    z-index: 0;
}

</style>

</head>

@section('content')
<div class="wrapperFull w-[100vw] h-[100vh] bg-amber-400">
        <div class ="banner">
<div class="slider" style="--quantity: 10">
    <div class="item" style="--position: 1"> <img src="{{ asset('assets/picturess/attackDown.png') }}"></div>
      <div class="item" style="--position: 2"> <img src="{{ asset('assets/picturess/attackLeft.png') }}"></div>
        <div class="item" style="--position: 3"> <img src="{{ asset('assets/picturess/attackRight.png') }}"></div>
          <div class="item" style="--position: 4"> <img src="{{ asset('assets/picturess/attackUpswordDown.png') }}"></div>
            <div class="item" style="--position: 5"> <img src="{{ asset('assets/picturess/attackUpswordUp.png') }}"></div>
            <div class="item" style="--position: 6"> <img src="{{ asset('assets/picturess/goblinFront1.png') }}"></div>
            <div class="item" style="--position: 7"> <img src="{{ asset('assets/picturess/goblinFront2.png') }}"></div>
            <div class="item" style="--position: 8"> <img src="{{ asset('assets/picturess/goblinLeft1.png') }}"></div>
                    <div class="item" style="--position: 9"> <img src="{{ asset('assets/picturess/goblinLeft2.png') }}"></div>
            <div class="item" style="--position: 10"> <img src="{{ asset('assets/picturess/attackUpswordUp.png') }}"></div>

        </div>
        <div class = "content">
            <div class="model">
            </div>
        </div>
        </div>
@endsection

@section('regSec')
<div class="regSec w-[100vw] h-[100vh]">
  <h1 class="text-4xl font-bold text-blue-600 text-center hover:text-purple-700 hover:cursor-pointer mt-2">Hello Tailwind 🚀</h1>


<div class="container flex flex-row w-[80vw] justify-center justify-items-center mx-auto mt-2 gap-3.5">
<div class="bg-amber-500 w-[40vw] h-auto p-3 text-justify">
<h1 class="text-2xl text-center text-white font-bold"> Section 1  </h1>
<p>Lorem ipsum dolor Lorem ipsum dolor sit amet consectetur adipisicing elit. A itaque amet tempora velit nulla reiciendis saepe eveniet ipsam, laboriosam dolores ab odio fugiat fugit temporibus. Corrupti illo harum libero animi. sit amet consectetur adipisicing elit. A itaque amet tempora velit nulla reiciendis saepe eveniet ipsam, laboriosam dolores ab odio fugiat fugit temporibus. Corrupti illo harum libero animi.</p>
</div>
<div class="bg-blue-500 w-[40vw] p-3 h-auto">
<h1 class="text-2xl font-bold text-center text-white"> Section 2 </h1>
<p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. A itaque amet tempora velit nulla reiciendis saepe eveniet ipsam, laboriosam dolores ab odio fugiat fugit temporibus. Corrupti illo harum libero animi. Lorem ipsum dolor sit amet consectetur adipisicing elit. A itaque amet tempora velit nulla reiciendis saepe eveniet ipsam, laboriosam dolores ab odio fugiat fugit temporibus. Corrupti illo harum libero animi.</p>
</div>
</div>


<div class="container flex flex-row w-[80vw] justify-center justify-items-center mx-auto my-[2rem] gap-3.5">
<div class="bg-amber-500 w-[40vw] h-auto p-3 text-justify">
<h1 class="text-2xl text-center text-white font-bold"> Section 3  </h1>
<p>Lorem ipsum dolor Lorem ipsum dolor sit amet consectetur adipisicing elit. A itaque amet tempora velit nulla reiciendis saepe eveniet ipsam, laboriosam dolores ab odio fugiat fugit temporibus. Corrupti illo harum libero animi. sit amet consectetur adipisicing elit. A itaque amet tempora velit nulla reiciendis saepe eveniet ipsam, laboriosam dolores ab odio fugiat fugit temporibus. Corrupti illo harum libero animi.</p>
</div>
<div class="bg-blue-500 w-[40vw] p-3 h-auto">
<h1 class="text-2xl font-bold text-center text-white"> Section 4 </h1>
<p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. A itaque amet tempora velit nulla reiciendis saepe eveniet ipsam, laboriosam dolores ab odio fugiat fugit temporibus. Corrupti illo harum libero animi. Lorem ipsum dolor sit amet consectetur adipisicing elit. A itaque amet tempora velit nulla reiciendis saepe eveniet ipsam, laboriosam dolores ab odio fugiat fugit temporibus. Corrupti illo harum libero animi.</p>
</div>
</div>

    <div class="justify-items-center items-center mx-auto flex flex-col mb-3">
    <h1 class="text-3xl font-bold text-black mb-3">Check Tag </h1>
    <button class="bg-blue-700 text-white rounded-2xl px-2.5 hover:bg-blue-300 py-1.5" onclick="window.location='{{ route('registration') }}'">Register!</button>
    </div>

    <marquee class="bg-amber-950 text-white"> check </marquee>

</div>

@endsection

