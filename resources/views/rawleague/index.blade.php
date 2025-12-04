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
                <img class="h-auto w-full self-end z-0 block md:hidden"
                    src="{{ asset('assets/img/boy-rawleague-mobile.webp') }}" alt="boy-warkop-mobile">
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
        <section
            class="bg-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-3 sm:px-10 lg:px-50 z-10 relative">
            <h1 style="font-weight: 400"
                class="ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
                ABOUT RAW LEAGUE</h1>

            <div class="flex flex-wrap items-start my-3 flex-col-reverse md:flex-row">
                <p class="text-[#0353FF] text-[14px] mt-6 md:mt-0 md:text-2xl w-full md:w-1/2">
                    <b>Raw League</b> bukan sekadar turnamen, bro! Ini ajang buat lo nunjukin skill, strategi, dan mental
                    Resilient,
                    Awesome, Wise! Buat lo yang jago futsal, siap-siap wakilin sekolah lo (SMP atau SMA) dan buktiin kalau
                    lo
                    bisa jadi tim paling solid di lapangan. Buat lo yang lebih jago di Mobile Legends, bebas gabung tim
                    campuran
                    yang penting umur lo di antara 12 sampai 19 tahun.
                    <br>
                    <br>
                    Di sini, menang bukan cuma soal skor, tapi gimana lo berani tampil dengan cara lo sendiri, tanpa perlu
                    pembuktian dari siapa pun. Yuk, daftar sekarang dan jadi bagian dari Generasi Ga Butuh Validasi!

                </p>
                <img class=" object-contain rounded-xl w-full md:w-1/2"
                    src="{{ asset('assets/img/rawleague/kv-raw-league.webp') }}" alt="kv_rawleague">
            </div>

            <div class="mt-10">
                <img class="h-full w-full object-cover rounded-xl"
                    src="{{ asset('assets/img/rawleague/prize-rawleague.webp') }}" alt="prize_rawleague">
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

        <section class=" bg-[#0353FF]  h-auto bg-center overflow-hidden text-white py-20 px-0 md:px-8 relative text-center">
            <img class="h-auto w-[20%] top-0 absolute right-0 self-end z-0"
                src="{{ asset('assets/img/rawleague/game-controller.webp') }}" alt="game-controller">
            <img class="h-auto w-[20%] bottom-0 absolute left-0 self-end z-0"
                src="{{ asset('assets/img/rawleague/soccer-ball.webp') }}" alt="game-controller">
            <h1 class="ultraprint-font  inline-block p-3 text-4xl md:text-5xl  rounded-2xl mb-2  font-medium">
                DETAIL TERM AND CONDITION</h1>

            <div class="flex justify-center items-center w-full">
                <div class=" flex flex-wrap flex-col justify-center items-center w-[90%] md:w-[80%] mt-8">


                    <!-- Buttons for selecting images -->

                    <div id="image-container" class="flex flex-col items-center z-10">
                        <div x-data="{
                            open: false,
                            zoom: 1,
                            isDown: false,
                            startX: 0,
                            startY: 0,
                            scrollLeft: 0,
                            scrollTop: 0,
                            threshold: 5,
                            imageSrc: '{{ asset('assets/img/rawleague/terms-futsal.webp') }}',
                            setImageSrc(buttonValue) {
                                if (buttonValue === 'futsal') {
                                    this.imageSrc = '{{ asset('assets/img/rawleague/terms-futsal.webp') }}';
                                } else if (buttonValue === 'mobile_legend') {
                                    this.imageSrc = '{{ asset('assets/img/rawleague/terms-ml.webp') }}';
                                }
                            }
                        }" class="flex flex-col justify-center">
                            <div id="terms-buttons" class="transition-opacity duration-300 ease-in-out mb-8">
                                <button type="button" value="futsal"
                                    class="terms-btn font-bold text-[18px] text-white border-2 border-[#FF5632] rounded-full px-5 py-2.5 text-center me-2 mb-2 bg-[#FF5632]"
                                    @click="setImageSrc('futsal')">
                                    Futsal
                                </button>
                                <button type="button" value="mobile_legend"
                                    class="terms-btn text-white text-[18px] border-2 border-[#FF5632] rounded-full font-bold px-5 py-2.5 text-center me-2 mb-2 bg-transparent"
                                    @click="setImageSrc('mobile_legend')">
                                    Mobile Legend
                                </button>
                            </div>

                            <div class="w-full flex justify-center mb-4">
                                <img :src="imageSrc" alt="Event Image"
                                    draggable="false"
                                    class="display-image cursor-pointer select-none w-full h-auto" @click="open = true" />
                            </div>

                            <!-- Dialog / Modal -->
                            <div x-show="open" x-transition
                                class="fixed inset-0 bg-black/70 flex items-center justify-center p-5">
                                <!-- Click outside to close -->
                                <div class="absolute inset-0" @click="open = false"></div>

                                <div class="relative bg-white text-black rounded-lg shadow-lg p-4 max-w-4xl w-full">

                                    <!-- Close Button -->
                                    <button class="absolute top-3 right-3 text-gray-600 hover:text-black text-2xl"
                                        @click="open = false">&times;</button>

                                    <!-- Zoom controls -->
                                    <div class="flex justify-between items-center mb-3 mt-10 px-2">
                                        <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300"
                                            @click="zoom -= 0.4">-</button>

                                        <span class="font-semibold">Zoom: <span x-text="zoom.toFixed(1)"></span>x</span>

                                        <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300"
                                            @click="zoom += 0.4">+</button>
                                    </div>

                                    <!-- Zoomable Image -->
                                    <div class="overflow-auto max-h-[80vh] border rounded">
                                        <img :src="imageSrc" alt="Event Image" draggable="false"
                                            :style="'transform: scale(' + zoom + '); transform-origin: top left;'"
                                            class="display-image transition-transform duration-200 cursor-move select-none"
                                            @mousedown="startX = $event.pageX; startY = $event.pageY; scrollLeft = $el.parentElement.scrollLeft; scrollTop = $el.parentElement.scrollTop; isDown = true"
                                            @mousemove="if (isDown) { 
                                                let deltaX = $event.pageX - startX;
                                                let deltaY = $event.pageY - startY;
                                                if (Math.abs(deltaX) > threshold) { 
                                                    $el.parentElement.scrollLeft = scrollLeft - deltaX;
                                                }
                                                if (Math.abs(deltaY) > threshold) {
                                                    $el.parentElement.scrollTop = scrollTop - deltaY;
                                                }
                                            }"
                                            @mouseup="isDown = false" @mouseleave="isDown = false" />
                                    </div>

                                </div>
                            </div>
                            <p class=" my-3 text-[14px] text-center md:text-2xl  w-[100%]">
                                Download Formulir Consent <a class="underline" href="{{ asset('assets/doc/parental_consent_form.pdf') }}" download="parental_consent_form.pdf">Disini</a>
                        </div>
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

    <section class="bg-[#FFFFFF] py-20 px-3 sm:px-10 lg:px-50 z-10 ">
        <div class="text-center mt-10">
            <section>
                @include('components.faq-rawleague')
            </section>
        </div>
    </section>

    {{-- apa aja di grand final --}}
    <section class="bg-[#FFFFFF] py-20 px-3 sm:px-10 lg:px-50 z-10 ">
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
    <section class=" bg-[#0353FF] py-20 px-3 sm:px-10 lg:px-50 z-10 ">
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
                                        <a href="{{ route('rawleague.gallery', $gallery->slug) }}"
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
                                                {{ Str::limit($gallery->street_loc, 20, '...') }}</span>
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
    <section class="bg-[#FFFFFF] py-20 px-3 sm:px-10 lg:px-50 z-10 ">
        {{-- presented --}}
        <div class="text-center">
            <h1 class=" ultraprint-font uppercase p-3 text-4xl md:text-5xl rounded-2xl text-[#0353FF] font-normal">
                Presented By</h1>
            <div class="flex justify-center flex-wrap gap-10 my-4">
                @if ($presenters->isEmpty())
                    <p class="text-center text-lg text-gray-500">No Presenters right now</p>
                @else
                    @foreach ($presenters as $item)
                        <img src="{{ asset('storage/' . $item->logo) }}" alt="{{ $item->name }}"
                            class=" object-contain w-[200px]">
                    @endforeach
                @endif
            </div>

        </div>

        {{-- sponsored by --}}
        <div class="text-center mt-20">
            <h1 class=" ultraprint-font uppercase p-3 text-4xl md:text-5xl rounded-2xl text-[#0353FF] font-normal">
                Sponsored By</h1>
            <div class="flex justify-center flex-wrap gap-10  my-4">
                @if ($sponsors->isEmpty())
                    <p class="text-center text-lg text-gray-500">No Sponsors right now</p>
                @else
                    @foreach ($sponsors as $item)
                        <img src="{{ asset('storage/' . $item->logo) }}" alt="{{ $item->name }}"
                            class=" object-contain w-[200px] ">
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    {{-- Socmed --}}
    <section class="bg-[#FFFFFF] py-20 px-3 sm:px-10 lg:px-50 z-10 ">
        <div class="text-center py-20">
            <h1 class=" ultraprint-font  inline-block p-3 text-5xl rounded-2xl text-[#0353FF] font-normal">
                SOCIAL MEDIA</h1>

            <div class="flex justify-center">
                @livewire('social-media',['campaign_type' => 'rawleague'])
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

            .marquee-wrapper {
                display: flex;
                width: 200%;
                /* Important: double width for seamless scroll */
                animation: marquee 20s linear infinite;
            }
        </style>
        <script>
            const termsBtn = document.querySelectorAll('.terms-btn');
            let selectedBtnValue = 'futsal';
            // showImage('futsal')

            termsBtn.forEach(btn => {
                btn.addEventListener('click', () => {
                    selectedBtnValue = btn.value;

                    termsBtn.forEach(b => {
                        b.classList.remove('bg-[#FF5632]');
                        b.classList.add('bg-transparent');
                    });
                    btn.classList.remove('bg-transparent');
                    btn.classList.add('bg-[#FF5632]');

                });
            });

            // function showImage(buttonValue) {
            //     // Get the Alpine.js data object reference
            //     const alpineData = document.querySelector('[x-data]').__x.$data;

            //     // Set the image source based on the button clicked
            //     if (buttonValue === 'futsal') {
            //         alpineData.imageSrc = `{{ asset('assets/img/rawleague/terms-futsal.webp') }}`;
            //     } else if (buttonValue === 'mobile_legend') {
            //         alpineData.imageSrc = `{{ asset('assets/img/rawleague/terms-ml.webp') }}`;
            //     }

            //     // Make the image visible by removing the 'hidden' class (no longer needed if using Alpine.js to control visibility)
            //     const imageElement = document.querySelector('.display-image');
            //     imageElement.classList.remove('hidden'); // Optional: only if you want to use plain JS for this

            //     // Optionally, you can also show the image container if it's hidden (but Alpine should handle this)
            //     // const imageContainer = document.getElementById('image-container');
            //     // imageContainer.classList.remove('hidden');
            // }
        </script>
    @endif
@endsection
