@extends('layouts.app')
@php
    $rows = 5;
    $columns = 4;
@endphp
@section('content')
    <div class="relative">
        <div class="lazy-background z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative">
            <div class="flex h-full w-full  mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/boy-rawleague.webp') }}"
                    alt="boy-warkop">
                <img class="h-auto w-full self-end z-0 block md:hidden" src="{{ asset('assets/img/boy-rawleague.webp') }}"
                    alt="boy-warkop-mobile">
                <a href="https://student.generasiraw.org/login" class="inline-block ">
                    <button
                        class="hover:scale-110 ease-in-out text-[16px] md:text-4xl flex items-center bg-[#0353FF] py-1.5 px-8 text-white rounded-3xl absolute z-10 bottom-1/8 left-1/2 transform -translate-x-1/2 transition-all duration-300">
                        <span class="ultraprint-font">Gas Tanpa Basa-Basi!</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="size-4 md:size-8 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
        <div>

        </div>
        <div
            class="bg-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-3 sm:px-10 lg:px-50 z-10 relative">
            <h1 style="font-weight: 400"
                class="ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
                ABOUT RAW LEAGUE</h1>

            <p class="text-[#0353FF] my-3 text-[14px] md:text-2xl">
                <b>Raw League</b> adalah rangkaian kompetisi pra-acara menuju
                RAW Festival 2026.
                Di sini lo bisa buktiin skill lo — mau itu nge-goal di futsal atau nge-gank di Mobile Legends.
                <br>
                <br>
                Tapi ini bukan cuma soal menang. RAW League tuh soal proses bareng temen, ngasah mental kompetitif, dan
                nunjukin versi terbaik dari diri lo sendiri. Kita pengen lo seru-seruan, ngerasain semangat kompetisi, tapi
                tetap solid dan saling support.
                <br>
                <br>
                Dan yang paling keren, tim yang berhasil bakal naik ke panggung Grand Final RAW Festival 2026 bukti nyata
                perjuangan lo dari nol.
            </p>
            <div class="mt-10">
                <img class="h-full w-full object-cover rounded-xl"
                    src="{{ asset('assets/img/rawleague/banner-rawleague.webp') }}" alt="banner_rawleague">
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
    </div>

    @if (Route::is('rawleague'))
        <style>
            @keyframes marquee {
                0% {
                    transform: translateX(0%);
                }

                100% {
                    transform: translateX(-50%);
                }
            }

            dialog::backdrop {
                background-color: rgba(0, 0, 0, 0.372);

                /* Tailwind utility classes via @apply */
            }

            #map-overlay {
                pointer-events: none;
                /* Ensure overlay doesn't block clicks */
                position: absolute;
                /* Ensure it's above the image */
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 40;
                /* Make sure it's above the image but not interfering with clicks */
            }

            .marquee-wrapper {
                display: flex;
                width: 200%;
                /* Important: double width for seamless scroll */
                animation: marquee 20s linear infinite;
            }

            .swiper-button-prev,
            .swiper-button-next {
                color: white;
            }

            .swiper-button-prev::after,
            .swiper-button-next::after {
                font-size: 20px
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

            .dot {
                position: absolute;
                width: 10px;
                height: 10px;
                background: red;
                border-radius: 50%;
                transform: translate(-50%, -50%);
                pointer-events: none;
            }
        </style>
    @endif
@endsection
