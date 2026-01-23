@extends('layouts.app')
@php
    $rows = 5;
    $columns = 4;
@endphp
@section('content')
    <div class="relative">
        <div class="lazy-background z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative">
            <div
                class="relative flex flex-col md:flex-row h-full w-full md:w-[100%]  justify-end md:justify-between items-center">
                <div class="ml-[5%] max-w-[80%] md:max-w-full absolute top-2/9 md:top-1/3 z-10">
                    <h1 class=" text-white font-bold  text-4xl md:text-[35px] lg:text-6xl leading-tight  uppercase">Saatnya
                        tunjukin <br class="block md:none" />
                        <img class="inline-block w-[20%] mt-[-10px]" src="{{ asset('assets/img/logo-raw.webp') }}"
                            alt="logo-raw">
                        power lo!
                    </h1>
                    <h1
                        class=" mt-2 bg-[#FEFC8B] inline-block p-1 md:p-3  text-[20px] md:text-2xl lg:text-4xl rounded-[10px] md:rounded-2xl text-[#0353FF] font-bold">
                        #GenerasiGaButuhValidasi</h1>
                </div>

                <img class="h-auto w-full md:w-[60%] lg:w-[55%] 2xl:w-[40%] mr-0 absolute right-0 self-end z-0"
                    src="{{ asset('assets/img/image-boy-atf.webp') }}" alt="image-boy-atf">

                <a href="https://generasiraw.org/raw-fest" class="inline-block ">
                    <button
                        class="hover:scale-110 ease-in-out text-[16px] md:text-4xl flex items-center bg-[#0353FF] py-1.5 px-8 text-white rounded-3xl absolute z-10 bottom-1/8 left-1/2 transform -translate-x-1/2 transition-all duration-300">
                        <span class="ultraprint-font">CEK RAW FESTIVAL YUK!</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="size-4 md:size-8 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
        <div
            class=" bg-gradient-to-t from-[#FF5632] via-[#FFFFFF] to-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-10 md:px-50 z-10 relative">
            <h1 style="font-weight: 400"
                class=" ultraprint-font bg-[#FF5632] inline-block p-3 text-2xl rounded-2xl text-[#FFFFFF] font-medium">
                ABOUT RAW</h1>
            <p class="text-[#0353FF] my-3 text-[16px] md:text-2xl"> RAW bukan sekadar nama yang bisa kasih lo semua jawaban,
                tapi yang nemenin lo cari jalan. Ini sebuah mindset, lahir dari obrolan real sesama anak-anak cowok tentang
                keseharian, tantangan, dan cara menghadapinya!
                <br>
                <br>
                <b>Resilient</b> itu proses, bukan soal kuat tiap hari, tapi soal terus jalan walau berat. <br>
                <b>Awesome</b> itu bukan ngejar validasi, tapi jadi versi terbaik dari diri lo sendiri. <br>
                <b>Wise</b> itu perjuangan, belajar milih yang benar, meski kadang gak gampang. <br>
                <br>
                <br>
                Gerakan ini kita bentuk bareng, bukan buat ngerampas kebebasan, tapi buat ngangkat suara yang kadang susah
                diceritain. Kita dengerin lo, bro
            </p>
            <div class="relative w-full pt-[56.25%] rounded-2xl overflow-hidden mt-5 md:mt-25">
                <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/3mVB9zd3NUo"
                    frameborder="0" allowfullscreen>
                </iframe>
            </div>
        </div>
        <div class="overflow-hidden bg-[#FEFC8B] whitespace-nowrap">
            <div class="marquee-wrapper">
                @for ($i = 0; $i < $rows; $i++)
                    <div class="flex">
                        @for ($j = 0; $j < $columns; $j++)
                            <span class="mx-4 text-blue-800 font-bold text-lg">Generasi RAW</span>
                        @endfor
                    </div>
                @endfor
            </div>
        </div>
        <div class="bg-blue-600 text-white py-20 md:py-50 px-8 relative">
            <div class="flex flex-col justify-center">

                <div class="flex justify-center items-center space-x-8  mb-20 md:mb-40 lg:mx-20 relative z-0">

                    <div class="flex-shrink-0 justify-end w-16 h-96 z-10 hidden md:flex">
                        <div
                            class="swiper-pagination swiper-page-3 !right-auto h-full flex flex-col justify-center items-center space-y-3">
                        </div>
                    </div>
                    <div
                        class="absolute inset-0 flex-col md:!left-[80px] !top-[-45px] md:!top-[-60px] justify-left z-20 pointer-events-none">
                        <h1 class="uppercase font-semibold text-xs md:text-sm">raw Fest</h1>
                        <h1 id="bigTitle-3"
                            class="ultraprint-font text-[30px] md:text-7xl uppercase text-white drop-shadow-md">
                            {{ $rawfestCarousel->first()->big_title ?? 'Coming Soon' }}
                        </h1>
                    </div>
                    <div
                        class="absolute inset-0 flex md:hidden mr-0 !top-[-45px] md:!top-[-60px] justify-end z-20 pointer-events-none">
                        <h1 id="mobileSideTitle-3" class="uppercase font-semibold text-xs md:text-sm">
                            {{ $rawfestCarousel->first()->side_title ?? 'Upcoming Event' }}</h1>
                    </div>
                    <div class="relative swiper  swiper-container-3 h-52 md:h-[450px] lg:h-[600px] w-full  flex-shrink">

                        <!-- Swiper Slides -->
                        <div class="swiper-wrapper">
                            @if (!$rawfestCarousel->isEmpty())
                                @foreach ($rawfestCarousel as $slide)
                                    <div class="swiper-slide" data-big-title="{{ $slide->big_title }}"
                                        data-mobile-side-title="{{ $slide->side_title }}"
                                        data-side-title="{{ $slide->side_title }}">
                                        <img class="h-full w-full object-contain rounded-xl"
                                            src="{{ asset('storage/' . $slide->image_path) }}"
                                            alt="{{ $slide->big_title ?? 'carousel_rawfest' }}">
                                    </div>
                                @endforeach
                            @else
                                <div class="swiper-slide">
                                    <img class="h-full w-full object-cover rounded-xl"
                                        src="{{ asset('assets/img/carousel_rawfest/carousel_1.webp') }}"
                                        alt="carousel_rawfest_1">
                                </div>
                                <div class="swiper-slide">
                                    <img class="h-full w-full object-cover rounded-xl"
                                        src="{{ asset('assets/img/carousel_rawfest/carousel_1.webp') }}"
                                        alt="carousel_rawfest_1">
                                </div>
                                <div class="swiper-slide">
                                    <img class="h-full w-full object-cover rounded-xl"
                                        src="{{ asset('assets/img/carousel_rawfest/carousel_1.webp') }}"
                                        alt="carousel_rawfest_1">
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="flex-shrink-0 w-40 text-left z-10 hidden md:block">
                        <h1 id="sideTitle-3" class="uppercase font-semibold ml-[40px] text-lg">
                            {{ $rawfestCarousel->first()->side_title ?? 'Upcoming Event' }}</h1>
                    </div>
                </div>
                <div class="flex justify-center items-center space-x-8 lg:mx-20 relative z-0">

                    <div class="flex-shrink-0  justify-end w-16 h-96 z-10 hidden md:flex">
                        <div
                            class="swiper-pagination swiper-page-1 !right-auto h-full flex flex-col justify-center items-center space-y-3">
                        </div>
                    </div>
                    <div
                        class="absolute inset-0 flex-col md:!left-[80px] !top-[-45px] md:!top-[-60px] justify-left z-20 pointer-events-none">
                        <h1 class="uppercase font-semibold text-xs md:text-sm">warkop RAWvolution</h1>
                        <h1 id="bigTitle-1"
                            class="ultraprint-font text-[30px] md:text-7xl uppercase text-white drop-shadow-md">
                            {{ $warkopCarousel->first()->big_title ?? 'Coming Soon' }}
                        </h1>
                    </div>
                    <div
                        class="absolute inset-0 flex md:hidden mr-0 !top-[-45px] md:!top-[-60px] justify-end z-20 pointer-events-none">
                        <h1 id="mobileSideTitle-1" class="uppercase font-semibold text-xs md:text-sm">
                            {{ $warkopCarousel->first()->side_title ?? 'Upcoming Event' }}</h1>
                    </div>
                    <div class="relative swiper swiper-container-1 h-52  md:h-[450px] lg:h-[600px]  w-full  flex-shrink">

                        <!-- Swiper Slides -->
                        <div class="swiper-wrapper">
                            @if (!$warkopCarousel->isEmpty())
                                @foreach ($warkopCarousel as $slide)
                                    <div class="swiper-slide" data-big-title="{{ $slide->big_title }}"
                                        data-mobile-side-title="{{ $slide->side_title }}"
                                        data-side-title="{{ $slide->side_title }}">
                                        <img class="h-full w-full object-cover rounded-xl"
                                            src="{{ asset('storage/' . $slide->image_path) }}"
                                            alt="{{ $slide->big_title ?? 'carousel_warkop' }}">
                                    </div>
                                @endforeach
                            @else
                                <div class="swiper-slide">
                                    <img class="h-full w-full object-cover rounded-xl"
                                        src="{{ asset('assets/img/carousel_warkop/carousel_1.webp') }}"
                                        alt="carousel_warkop_1">
                                </div>
                                <div class="swiper-slide">
                                    <img class="h-full w-full object-cover rounded-xl"
                                        src="{{ asset('assets/img/carousel_warkop/carousel_1.webp') }}"
                                        alt="carousel_warkop_1">
                                </div>
                                <div class="swiper-slide">
                                    <img class="h-full w-full object-cover rounded-xl"
                                        src="{{ asset('assets/img/carousel_warkop/carousel_1.webp') }}"
                                        alt="carousel_warkop_1">
                                </div>
                            @endif

                        </div>
                    </div>

                    <div class="flex-shrink-0 w-40 text-left z-10 hidden md:block ">
                        <h1 id="sideTitle-1" class="uppercase font-semibold text-lg ml-[40px]">
                            {{ $warkopCarousel->first()->side_title ?? 'Upcoming Event' }}
                        </h1>
                    </div>
                </div>
                <div class="flex justify-center items-center space-x-8  mt-20 md:mt-40 lg:mx-20 relative z-0">

                    <div class="flex-shrink-0 justify-end w-16 h-96 z-10 hidden md:flex">
                        <div
                            class="swiper-pagination swiper-page-2 !right-auto h-full flex flex-col justify-center items-center space-y-3">
                        </div>
                    </div>
                    <div
                        class="absolute inset-0 flex-col md:!left-[80px] !top-[-45px] md:!top-[-60px] justify-left z-20 pointer-events-none">
                        <h1 class="uppercase font-semibold text-xs md:text-sm">raw league</h1>
                        <h1 id="bigTitle-2"
                            class="ultraprint-font text-[30px] md:text-7xl uppercase text-white drop-shadow-md">
                            {{ $rawleagueCarousel->first()->big_title ?? 'Coming Soon' }}
                        </h1>
                    </div>
                    <div
                        class="absolute inset-0 flex md:hidden mr-0 !top-[-45px] md:!top-[-60px] justify-end z-20 pointer-events-none">
                        <h1 id="mobileSideTitle-2" class="uppercase font-semibold text-xs md:text-sm">
                            {{ $rawleagueCarousel->first()->side_title ?? 'Upcoming Event' }}</h1>
                    </div>
                    <div class="relative swiper  swiper-container-2 h-52 md:h-[450px] lg:h-[600px] w-full flex-shrink">

                        <!-- Swiper Slides -->
                        <div class="swiper-wrapper">
                            @if (!$rawleagueCarousel->isEmpty())
                                @foreach ($rawleagueCarousel as $slide)
                                    <div class="swiper-slide" data-big-title="{{ $slide->big_title }}"
                                        data-mobile-side-title="{{ $slide->side_title }}"
                                        data-side-title="{{ $slide->side_title }}">



                                        <img class="h-full w-full object-contain rounded-xl "
                                            src="{{ asset('storage/' . $slide->image_path) }}"
                                            alt="{{ $slide->big_title ?? 'carousel_rawleague' }}">
                                    </div>
                                @endforeach
                            @else
                                <div class="swiper-slide">
                                    <img class="h-full w-full object-cover rounded-xl"
                                        src="{{ asset('assets/img/carousel_rawleague/carousel_1.webp') }}"
                                        alt="carousel_rawleague_1">
                                </div>
                                <div class="swiper-slide">
                                    <img class="h-full w-full object-cover rounded-xl"
                                        src="{{ asset('assets/img/carousel_rawleague/carousel_1.webp') }}"
                                        alt="carousel_rawleague_1">
                                </div>
                                <div class="swiper-slide">
                                    <img class="h-full w-full object-cover rounded-xl"
                                        src="{{ asset('assets/img/carousel_rawleague/carousel_1.webp') }}"
                                        alt="carousel_rawleague_1">
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="flex-shrink-0 w-40 text-left z-10 hidden md:block">
                        <h1 id="sideTitle-2" class="uppercase font-semibold ml-[40px] text-lg">
                            {{ $rawleagueCarousel->first()->side_title ?? 'Upcoming Event' }}</h1>
                    </div>
                </div>
            </div>

        </div>
        <div class="overflow-hidden bg-[#FEFC8B] whitespace-nowrap">
            <div class="marquee-wrapper">
                @for ($i = 0; $i < $rows; $i++)
                    <div class="flex">
                        @for ($j = 0; $j < $columns; $j++)
                            <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                        @endfor
                    </div>
                @endfor
            </div>
        </div>
        <div class="text-center py-20">
            <h1 class=" ultraprint-font  inline-block p-3 text-5xl rounded-2xl text-[#0353FF] font-normal">
                SOCIAL MEDIA</h1>

            <div class="flex justify-center">
                @livewire('social-media', ['campaign_type' => 'warkop'])
            </div>
        </div>

    </div>

    <style>
        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .instagram-media {
            max-width: 22% !important;
            height: 571px !important;
            width: 100% !important;
        }

        .marquee-wrapper {
            display: flex;
            width: 200%;
            /* Important: double width for seamless scroll */
            animation: marquee 20s linear infinite;
        }

        .swiper-pagination-bullet {
            background-color: white;
            opacity: 1;
            width: 11px;
            height: 11px;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            width: 20px;
            height: 20px;
        }



        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #444;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection
