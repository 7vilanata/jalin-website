@extends('layouts.app')

@section('content')
    <div class="relative">
        <div class=" z-0 md:h-[105vh] h-screen w-full  overflow-x-hidden bg-cover relative"
            style="background-image: url('{{ asset('assets/img/atf-bg.webp') }}');">
            <div class="flex flex-col md:flex-row h-full w-full md:w-[90%] justify-self-center justify-end md:justify-between items-center">
                <div class="max-w-[80%] md:max-w-full">
                    <h1 class=" text-white font-bold md:text-6xl text-4xl leading-tight  uppercase">Saatnya tunjukin <br class="block md:none"/>
                        <img class="inline-block w-[20%] mt-[-10px]" src="{{ asset('assets/img/logo-raw.webp') }}" alt="logo-raw">
                        power lo!
                    </h1>
                    <h1 class=" mt-2 bg-[#FEFC8B] inline-block p-1 md:p-3 md:text-4xl text-[20px] rounded-[10px] md:rounded-2xl text-[#0353FF] font-bold">
                        #GenerasiGaButuhValidasi</h1>
                </div>

                <img class="h-auto w-full md:w-[55%] mr-0 md:mr-[-70px]  self-end z-0"
                    src="{{ asset('assets/img/image-boy-atf.webp') }}" alt="image-boy-atf">
            </div>
        </div>
        <div
            class=" bg-gradient-to-t from-[#FF5632] to-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-10 md:px-50 z-10 relative">
            <h1 style="font-weight: 400"
                class=" ultraprint-font bg-[#FF5632] inline-block p-3 text-2xl rounded-2xl text-[#FFFFFF] font-medium">
                ABOUT RAW</h1>
            <p class="text-[#0353FF] my-3 text-[16px] md:text-2xl"> RAW lahir dari semangat membangun kekuatan dari dalam diri.
                Nama ini dikembangkan bersama remaja laki-laki — melalui suara, pandangan, dan aspirasi mereka.
                Lebih dari sekadar nama, RAW mencerminkan siapa mereka, dan nilai-nilai yang mereka junjung.
                RAW punya arti:
                <br>
                <br>
                <b>Resilient</b> — kuat dan berani menghadapi tantangan <br>
                <b>Awesome</b> — keren dengan cara mereka sendiri <br>
                <b>Wise</b> — bijak dalam mengambil keputusan
            </p>
            <iframe class="aspect-video rounded-2xl mt-5 md:mt-25" src="https://www.youtube.com/embed/OZGjJXvqN_U"></iframe>
        </div>
        <div class="overflow-hidden bg-yellow-300 whitespace-nowrap">
            <div class="marquee-wrapper">
                <div class="flex">
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                </div>
                <div class="flex">
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                </div>
                <div class="flex">
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                </div>
            </div>
        </div>
        <div class="bg-blue-600 text-white py-50 px-8 relative">
            <div class="flex flex-col justify-center">

                <div class="flex justify-center items-center space-x-8 lg:mx-20 relative z-0">
    
                    <div class="flex-shrink-0  justify-end w-16 h-96 z-10 hidden md:flex">
                        <div
                            class="swiper-pagination swiper-page-1 !right-auto h-full flex flex-col justify-center items-center space-y-3">
                        </div>
                    </div>
                    <div class="absolute inset-0 flex-col md:!left-[80px] !top-[-45px] md:!top-[-60px] justify-left z-20 pointer-events-none">
                        <h1 class="uppercase font-semibold text-xs md:text-sm">warkop RAWvolution</h1>
                        <h1 class="ultraprint-font text-[30px] md:text-7xl uppercase text-white drop-shadow-md">Coming Soon
                        </h1>
                    </div>
                    <div class="absolute inset-0 flex md:hidden mr-0 !top-[-45px] md:!top-[-60px] justify-end z-20 pointer-events-none">
                        <h1 class="uppercase font-semibold text-xs md:text-sm">Upcoming Event</h1>
                    </div>
                    <div class="relative swiper swiper-container-1 h-96 w-full  flex-shrink">
    
                        <!-- Swiper Slides -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="h-full w-full object-cover rounded-xl"
                                    src="{{ asset('assets/img/carousel_warkop/carousel_1.webp') }}" alt="carousel_warkop_1">
                            </div>
                            <div class="swiper-slide">
                                <img class="h-full w-full object-cover rounded-xl"
                                    src="{{ asset('assets/img/carousel_warkop/carousel_1.webp') }}" alt="carousel_warkop_1">
                            </div>
                            <div class="swiper-slide">
                                <img class="h-full w-full object-cover rounded-xl"
                                    src="{{ asset('assets/img/carousel_warkop/carousel_1.webp') }}" alt="carousel_warkop_1">
                            </div>
                        </div>
                    </div>
    
                    <div class="flex-shrink-0 w-40 text-left z-10 hidden md:block">
                        <h1 class="uppercase font-semibold text-lg ml-[40px]">Upcoming Event</h1>
                    </div>
                </div>
                <div class="flex justify-center items-center space-x-8  mt-40 lg:mx-20 relative z-0">
    
                    <div class="flex-shrink-0 justify-end w-16 h-96 z-10 hidden md:flex">
                        <div
                            class="swiper-pagination swiper-page-2 !right-auto h-full flex flex-col justify-center items-center space-y-3">
                        </div>
                    </div>
                    <div class="absolute inset-0 flex-col md:!left-[80px] !top-[-45px] md:!top-[-60px] justify-left z-20 pointer-events-none">
                        <h1 class="uppercase font-semibold text-xs md:text-sm">raw league</h1>
                        <h1 class="ultraprint-font text-[30px] md:text-7xl uppercase text-white drop-shadow-md">Coming Soon
                        </h1>
                    </div>
                    <div class="absolute inset-0 flex md:hidden mr-0 !top-[-45px] md:!top-[-60px] justify-end z-20 pointer-events-none">
                        <h1 class="uppercase font-semibold text-xs md:text-sm">Upcoming Event</h1>
                    </div>
                    <div class="relative swiper  swiper-container-2 h-96 w-full flex-shrink">
    
                        <!-- Swiper Slides -->
                        <div class="swiper-wrapper">
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
                        </div>
                    </div>
    
                    <div class="flex-shrink-0 w-40 text-left z-10 hidden md:block">
                        <h1 class="uppercase font-semibold ml-[40px] text-lg">Upcoming Event</h1>
                    </div>
                </div>
    
                <div class="flex justify-center items-center space-x-8  mt-40 lg:mx-20 relative z-0">
    
                    <div class="flex-shrink-0 justify-end w-16 h-96 z-10 hidden md:flex">
                        <div
                            class="swiper-pagination swiper-page-3 !right-auto h-full flex flex-col justify-center items-center space-y-3">
                        </div>
                    </div>
                    <div class="absolute inset-0 flex-col md:!left-[80px] !top-[-45px] md:!top-[-60px] justify-left z-20 pointer-events-none">
                        <h1 class="uppercase font-semibold text-xs md:text-sm">raw Fest</h1>
                        <h1 class="ultraprint-font text-[30px] md:text-7xl uppercase text-white drop-shadow-md">Coming Soon
                        </h1>
                    </div>
                    <div class="absolute inset-0 flex md:hidden mr-0 !top-[-45px] md:!top-[-60px] justify-end z-20 pointer-events-none">
                        <h1 class="uppercase font-semibold text-xs md:text-sm">Upcoming Event</h1>
                    </div>
                    <div class="relative swiper  swiper-container-3 h-96 w-full  flex-shrink">
    
                        <!-- Swiper Slides -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="h-full w-full object-cover rounded-xl"
                                    src="{{ asset('assets/img/carousel_rawfest/carousel_1.webp') }}" alt="carousel_rawfest_1">
                            </div>
                            <div class="swiper-slide">
                                <img class="h-full w-full object-cover rounded-xl"
                                    src="{{ asset('assets/img/carousel_rawfest/carousel_1.webp') }}" alt="carousel_rawfest_1">
                            </div>
                            <div class="swiper-slide">
                                <img class="h-full w-full object-cover rounded-xl"
                                    src="{{ asset('assets/img/carousel_rawfest/carousel_1.webp') }}" alt="carousel_rawfest_1">
                            </div>
                        </div>
                    </div>
    
                    <div class="flex-shrink-0 w-40 text-left z-10 hidden md:block">
                        <h1 class="uppercase font-semibold ml-[40px] text-lg">Upcoming Event</h1>
                    </div>
                </div>
            </div>

        </div>
        <div class="overflow-hidden bg-yellow-300 whitespace-nowrap">
            <div class="marquee-wrapper">
                <div class="flex">
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                </div>
                <div class="flex">
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                </div>
                <div class="flex">
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                </div>
            </div>
        </div>
        <div class="text-center py-20">
            <h1 class=" ultraprint-font  inline-block p-3 text-5xl rounded-2xl text-[#0353FF] font-normal">
                SOCIAL MEDIA</h1>

            <div class="flex justify-center">
                @include('components.instagram')
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
