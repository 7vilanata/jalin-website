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
        <section
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

        </section>


        <section class="overflow-hidden bg-[#FEFC8B] whitespace-nowrap">
            <div class="marquee-wrapper">
                @for ($i = 0; $i < $rows; $i++)
                    <div class="flex">
                        @for ($j = 0; $j < $columns; $j++)
                            <span class="mx-4 text-blue-800 font-bold text-lg">Generasi RAW</span>
                        @endfor
                    </div>
                @endfor
            </div>
        </section>

        <section
            class=" bg-[linear-gradient(to_bottom,_#0353FF_0%,_rgba(255,86,50,0.5)_100%)]  h-[1000px] bg-center overflow-hidden text-white py-20 px-8 relative text-center">
            <img class="h-auto w-[20%] top-0 absolute right-0 self-end z-0"
                src="{{ asset('assets/img/rawleague/game-controller.webp') }}" alt="game-controller">
            <img class="h-auto w-[20%] bottom-0 absolute left-0 self-end z-0"
                src="{{ asset('assets/img/rawleague/soccer-ball.webp') }}" alt="game-controller">
            <h1 class="ultraprint-font  inline-block p-3 text-4xl md:text-5xl  rounded-2xl mb-2  font-medium">
                RAW LEAGUE PRIZE POOL</h1>

            <div class="flex justify-center w-full">
                <div class=" flex flex-wrap justify-between items-center w-[60%] mt-15">
                    <div>
                        <h3 class="mx-4 text-blue-800 bg-[#FEFC8B] font-bold text-2xl p-3">Futsal</h3>
                    </div>
                    <div>
                        <h3 class="mx-4 text-blue-800 bg-[#FEFC8B] font-bold text-2xl p-3">Mobile Legend</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="overflow-hidden bg-[#FEFC8B] whitespace-nowrap">
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

    <section class="bg-[#FFFFFF] py-20 px-3 sm:px-10 lg:px-50 z-10 relative">
        <h1 style="font-weight: 400"
            class="ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
            DETAIL TERM AND CONDITION</h1>

        <div class="text-[#0353FF]">
            <p class=" my-3 text-[14px] md:text-2xl">
                Sebelum lo daftar, ada beberapa hal penting yang wajib lo baca dulu biar semuanya jelas dan fair, bro.
                <br>
                <br>
                <b>Ketentuan Umum</b>

            </p>
            <ul class="text-[#0353FF] list-disc pl-7 text-[14px] md:text-2xl">
                <li>RAW League adalah kompetisi pra-acara menuju RAW Festival 2026 dengan dua cabang: Mobile Legends dan
                    Futsal.</li>
                <li>Kompetisi ini cuma bisa diikuti oleh pelajar SMP dan SMA (usia maksimal 17 tahun).</li>
                <li>Peserta wajib mendaftar melalui WebApp resmi <a class=" underline"
                        href="https://student.generasiraw.org">student.generasiraw.org</a></li>
                <li>Setiap peserta hanya boleh ikut salah satu cabang lomba, antara Mobile Legends atau Futsal (gak bisa
                    dua-duanya, bro!).</li>
            </ul>
            <br>
            <br>
            <p class="  text-[14px] md:text-2xl">
                *Oh iya bro, ada dokumen wajib yang mesti lo siapin (kartu pelajar + form izin ortu). Download dulu di
                sini
                <a class="underline" href="#">👉 Download Formulir</a> , terus bawa pas Technical Meeting nanti!
            </p>
        </div>

        <div class="text-center mt-10">
            <section>
                @include('components.faq-rawleague')
            </section>
        </div>

    </section>

    {{-- apa aja di grand final --}}
    <section class="bg-[#FFFFFF] py-20 px-3 sm:px-10 lg:px-50 z-10 relative">
        <h1 style="font-weight: 400"
            class="ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
            ADA APA AJA DI GRAND FINAL</h1>

        <div class="text-[#0353FF]">
            <p class=" my-3 text-[14px] md:text-2xl">
                RAW League bukan cuma soal tanding, tapi ajang buat buktiin hasil perjuangan lo bareng tim dari awal sampai
                akhir. Di Grand Final nanti, lo bakal nemuin:
                <br><br>
                🏆 Perebutan Juara 1–4 buat tim terbaik dari Futsal & Mobile Legends
                <br><br>
                🎮 Pertandingan Mobile Legends seru yang bisa lo saksikan langsung
                <br><br>
                ⚽ Adu Futsal SMP & SMA yang dijamin bikin tegang sampai peluit akhir
                <br><br>
                🎉 Digelar di RAW Festival 2026, event paling heboh tempat semua energi dan semangat lo nyatu
            </p>
        </div>
    </section>

    {{-- kalender event --}}
    <section class=" bg-[#0353FF] py-20 px-3 sm:px-10 lg:px-50 z-10 relative">
        <h1 style="font-weight: 400"
            class="ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
            KALENDER EVENT</h1>
        @livewire('event-calendar-tabs')
    </section>

    {{-- event documentation --}}
    <section class="bg-[#FFFFFF] py-20  relative">
        <div class="text-center py-20">
            <h1 class=" ultraprint-font uppercase p-3 text-4xl md:text-5xl rounded-2xl text-[#0353FF] font-normal">
                Event Documentation</h1>

            <div class="my-10 text-center">
                <div class="flex justify-center">
                    @if ($galleries->isEmpty())
                        <p class="text-center text-lg text-gray-500">No gallery right now</p>
                    @else
                        <div
                            class="flex flex-wrap justify-center lg:justify-start gap-10 md:gap-3 my-10 max-w-screen-xl w-full">
                            @foreach ($galleries as $gallery)
                                @if ($gallery->slug)
                                    <div>
                                        <a href="{{ route('rawleague.gallery.show', $gallery->slug) }}"
                                            class="bg-white rounded-2xl overflow-hidden shadow-2xl hover:underline block max-w-[418px] h-[200px] md:h-[290px]">
                                            <!-- Card Image -->
                                            @if ($gallery->thumbnail)
                                                <img src="{{ asset('storage/' . $gallery->thumbnail) }}"
                                                    alt="{{ $gallery->title }}" class="w-full h-full object-cover ">
                                            @endif
                                        </a>
                                        <h4 class=" mt-4 text-[#0353FF] text-[18px] text-left font-bold ">
                                            {{ $gallery->title }}
                                        </h4>
                                        <div class="text-left flex gap-4 md:gap-10 text-[10px] md:text-[14px]">
                                            <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="size-3 md:size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                </svg>
                                                {{ $gallery->street_loc }}</span>
                                            <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="size-3 md:size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                                </svg>
                                                {{ \Carbon\Carbon::parse($gallery->image_date)->format('d F Y') }}</span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Pagination -->
                <div class="mt-4">
                    {{ $galleries->links() }} <!-- Pagination links -->
                </div>
            </div>
        </div>
    </section>

    {{-- Sponsor --}}
    <section class="bg-[#FFFFFF] py-20 px-3 sm:px-10 lg:px-50 z-10 relative">
        {{-- presented --}}
        <div class="text-center">
            <h1 class=" ultraprint-font uppercase p-3 text-4xl md:text-5xl rounded-2xl text-[#0353FF] font-normal">
                Presented By</h1>
            <div class="flex justify-center flex-wrap gap-10 my-4">
                @foreach ($presenters as $item)
                    <img src="{{ asset('storage/' . $item->logo) }}" alt="{{ $item->name }}"
                        class=" object-contain w-[100px] ">
                @endforeach
            </div>

        </div>

        {{-- sponsored by --}}
        <div class="text-center">
            <h1 class=" ultraprint-font uppercase p-3 text-4xl md:text-5xl rounded-2xl text-[#0353FF] font-normal">
                Sponsored By</h1>
            <div class="flex justify-center flex-wrap gap-10  my-4">
                @foreach ($sponsors as $item)
                    <img src="{{ asset('storage/' . $item->logo) }}" alt="{{ $item->name }}"
                        class=" object-contain w-[100px] ">
                @endforeach
            </div>
        </div>
    </section>

    {{-- Socmed --}}
    <section class="bg-[#FFFFFF] py-20 px-3 sm:px-10 lg:px-50 z-10 relative">
        <div class="text-center py-20">
            <h1 class=" ultraprint-font  inline-block p-3 text-5xl rounded-2xl text-[#0353FF] font-normal">
                SOCIAL MEDIA</h1>

            <div class="flex justify-center">
                @livewire('social-media')
            </div>
        </div>
    </section>

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
