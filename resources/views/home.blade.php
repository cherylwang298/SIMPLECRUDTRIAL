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
    <body class ="bg-amber-950 m-0 p-0">

    <h1 class="text-4xl font-bold text-blue-600">Hello Tailwind 🚀</h1>
    <h1 class="text-3xl font-bold text-black">Check H1 tag </h1>
    <button class="bg-blue-700 text-white rounded-2xl px-2.5 hover:bg-blue-300 py-1.5" onclick="window.location='{{ route('registration') }}'">Register!</button>


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

    </body>
@endsection

