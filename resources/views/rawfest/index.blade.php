@extends('layouts.app')
@php
    $rows = 5;
    $columns = 4;
@endphp
@section('content')
    <div class="relative">
        <div class="lazy-background z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative">
            <div class="flex h-full w-full  mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/boy-rawfest.webp') }}"
                    alt="boy-rawfest">
                <img class="h-auto w-full self-end z-0 block md:hidden"
                    src="{{ asset('assets/img/boy-rawfest-mobile.webp') }}" alt="boy-rawfest-mobile">
                <a href="https://student.generasiraw.org/" class="inline-block ">
                    <button
                        class="hover:scale-110 ease-in-out text-[16px] md:text-4xl flex items-center bg-[#0353FF] py-1.5 px-8 text-white rounded-3xl absolute z-10 bottom-1/8 left-1/2 transform -translate-x-1/2 transition-all duration-300">
                        <span class="ultraprint-font">AMBIL TIKET LO DISINI!</span>
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
                ABOUT RAW FESTIVAL</h1>

            <p class="text-[#0353FF] text-[14px] mt-6 md:mt-0 md:text-2xl">
                Bukan soal ngikutin orang lain, ini tentang merayakan keunikan diri dan bikin definisi “keren” versi kita
                sendiri lewat passion positif mulai dari olahraga, gaming, fashion, musik, sampai segala bentuk kreativitas!
                <br>
                <br>
                <b>RAW Festival</b> jadi arena pembuktian bahwa kita, anak muda, nggak butuh validasi dari tekanan
                pergaulan,
                merokok, tawuran, sampai bullying. Lewat RAW, kita bisa bikin panggung sendiri, nunjukin siapa kita
                sebenarnya, dan ngejalanin passion dengan cara yang kita banget.
                <br>
                <br>
                Join now and get ready to be <b>RAW Generation!</b>

            </p>

            <div class="mt-10">
                <img class="h-full w-full object-cover rounded-xl" src="{{ asset('assets/img/rawfest/kv.webp') }}"
                    alt="kv_rawfest">
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
            <h1 class="ultraprint-font  inline-block p-3 text-4xl md:text-5xl  rounded-2xl mb-2  font-medium">
                OFFICIAL MERCH</h1>

            <div class="flex justify-center items-center w-full">
                <div class=" flex flex-wrap flex-col justify-center items-center w-[90%] md:w-[80%] mt-8">
                    <div x-data="{ open: false, zoom: 1, isDown: false, startX: 0, scrollLeft: 0, threshold: 5 }" class="flex justify-center">

                        <!-- Thumbnail Image -->
                        <img src="{{ asset('assets/img/rawfest/flyer_merch.webp') }}" alt="Flyer Merch" draggable="false"
                            class="cursor-pointer select-none" @click="open = true; zoom = 1" />

                        <!-- Dialog / Modal -->
                        <div x-show="open" x-transition
                            class="fixed inset-0 bg-black/70 flex items-center justify-center z-10 p-5">
                            <!-- Click outside to close -->
                            <div class="absolute inset-0" @click="open = false"></div>

                            <div class="relative bg-white rounded-lg shadow-lg p-4 max-w-4xl w-full">

                                <!-- Close Button -->
                                <button class="absolute top-3 right-3 text-gray-600 hover:text-black text-2xl"
                                    @click="open = false">&times;</button>

                                <!-- Zoom controls -->
                                <div class="flex justify-between items-center text-gray-600 mb-3 mt-10 px-2">
                                    <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300"
                                        @click="zoom -= 0.4">-</button>

                                    <span class="font-semibold text-gray-600">Zoom: <span
                                            x-text="zoom.toFixed(1)"></span>x</span>

                                    <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300"
                                        @click="zoom += 0.4">+</button>
                                </div>

                                <!-- Zoomable Image -->
                                <div class="overflow-auto max-h-[80vh] border rounded">
                                    <img src="{{ asset('assets/img/rawfest/flyer_merch.webp') }}" draggable="false"
                                        :style="'transform: scale(' + zoom + '); transform-origin: top left;'"
                                        class="transition-transform duration-200 cursor-move select-none"
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
                    </div>

                </div>
            </div>
            <p class=" my-3 text-[14px] md:text-2xl">Ambil Merch lo
                <a class="underline" href="https://student.esensigroup.com/login">disini!</a>
            </p>

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

    {{-- redeem tiket --}}
    <section class="bg-[#FFFFFF] py-20 px-3 sm:px-10 lg:px-50 z-10 ">
        <h1 style="font-weight: 400"
            class="ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
            Cara Redeem Ticket RAWFEST</h1>

        <div class="text-[#0353FF]">
            <p class=" my-3 text-[14px] md:text-2xl">
                Udah punya akun Generasi RAW?
                <br>
                Langsung ambil tiket RAW Festival lo sekarang.
                <br><br>
                GRATIS.
                <br><br>
                <b>Caranya gampang:</b>
            </p>
            <br>
            <ol class="list-decimal pl-10 text-[14px] md:text-2xl leading-snug">
                <li>Buka <a href="https://student.generasiraw.org"
                        class="text-blue-500 underline">student.generasiraw.org</a>.</li>
                <li>Login ke akun lo</li>
                <li>KLIK "AMBIL TIKET LO" </li>
                <li>Pilih Ticket RAW Festival</li>
                <li>Klik Tukar</li>
                <li>Buka Hadiah Saya</li>
                <li>Tunjukin QR Code di gate pas hari H</li>
            </ol>
            <br>
            <p class="text-[14px] md:text-2xl">
                🔥 Info penting:
                <br>
                <br>
            <ol class="list-disc pl-10 text-[14px] md:text-2xl leading-snug">
                <li>Tiket gratis, kuota terbatas</li>
                <li>QR Code = tiket resmi, jangan dibagi</li>
                <li>1 akun cuma buat 1 tiket</li>
            </ol>
            <br>
            <br>
            <p class="text-[14px] md:text-2xl">
                Yang udah punya akun, jangan nunggu—ambil tiket lo sekarang 🚀
            </p>
            </p>

        </div>
    </section>

    {{-- apa aja di rawfest --}}
    <section class="bg-[#FFFFFF] ">
        <div class="pt-20 pb-5 px-3 sm:px-10 lg:px-50 z-10 ">
            <h1 style="font-weight: 400"
                class="ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
                ADA APA AJA DI RAW FESTIVAL</h1>
        </div>
        <img class="h-full w-full object-cover" src="{{ asset('assets/img/rawfest/apa_aja_di_rawfest.webp') }}"
            alt="apa_aja_di_rawfest">
    </section>

    {{-- tenant --}}
    <section class="bg-[#FFFFFF] ">
        <div class="pt-20 pb-5 px-3 sm:px-10 lg:px-50 z-10 ">
            <h1 style="font-weight: 400"
                class="ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
                TENANT ADA APA SAJA ?</h1>
        </div>
        <div class="text-center bg-white py-10 px-10 z-10">
            <div class="swiper mySwiper h-[120px] sm:h-[140px] md:h-[160px]">
                <div class="swiper-wrapper items-center">

                    <div class="swiper-slide flex items-center content-center justify-center overflow-hidden">
                        <img class="max-h-full w-full object-contain "
                            src="{{ asset('assets/img/rawfest/tenant/shihlin.webp') }}" alt="shihlin">
                    </div>

                    <div class="swiper-slide flex items-center content-center justify-center overflow-hidden">
                        <img class="max-h-full w-full object-contain"
                            src="{{ asset('assets/img/rawfest/tenant/seindonesia.webp') }}" alt="seindonesia">
                    </div>

                    <div class="swiper-slide flex items-center content-center justify-center overflow-hidden">
                        <img class="max-h-full w-full object-contain"
                            src="{{ asset('assets/img/rawfest/tenant/sariwarasa.webp') }}" alt="sariwarasa">
                    </div>

                    <div class="swiper-slide flex items-center content-center justify-center overflow-hidden">
                        <img class="max-h-full w-full object-contain rounded-xl"
                            src="{{ asset('assets/img/rawfest/tenant/renafoodies-2.webp') }}" alt="renafoodies">
                    </div>

                    <div class="swiper-slide flex items-center content-center justify-center overflow-hidden">
                        <img class="max-h-full w-full object-contain"
                            src="{{ asset('assets/img/rawfest/tenant/kopi_kenangan.webp') }}" alt="kopken">
                    </div>

                    <div class="swiper-slide flex items-center content-center justify-center overflow-hidden">
                        <img class="max-h-full w-full object-contain"
                            src="{{ asset('assets/img/rawfest/tenant/es_jeruk.webp') }}" alt="esjeruk">
                    </div>

                    <div class="swiper-slide flex items-center content-center justify-center rounded-xl overflow-hidden">
                        <img class="max-h-full w-full object-contain"
                            src="{{ asset('assets/img/rawfest/tenant/best_culinary.webp') }}" alt="best_culinary">
                    </div>

                </div>

            </div>
            <div class="swiper-pagination-rawfest mt-10"></div>
        </div>

    </section>

    {{-- rundown --}}
    <section class="bg-[#FFFFFF]">
        <div class="text-center  pt-20 pb-5 px-3 sm:px-10 lg:px-50 z-10 ">
            <h1 class=" ultraprint-font uppercase p-3 text-4xl md:text-5xl rounded-2xl text-[#0353FF] font-normal">
                RUNDOWN</h1>
        </div>
        <img class="h-full w-full object-cover" src="{{ asset('assets/img/rawfest/rundown.webp') }}" alt="rundown">
    </section>

    {{-- LOCATION --}}
    <section class="bg-[#FFFFFF]">
        <div class="text-center  py-20 px-3 sm:px-10 lg:px-50 z-10 ">
            <h1 class=" ultraprint-font uppercase p-3 text-4xl md:text-5xl rounded-2xl text-[#0353FF] font-normal">
                HOW TO GET TO LOCATION</h1>
        </div>
        <div
            class="flex flex-wrap justify-center gap-3 md:gap-10 text-center bg-[#D9D9D9]  pt-10 px-3 sm:px-10 lg:px-50 z-10 ">
            <x-how-to-get-card :topTitle="'Venue Location'" :title="'Lokasi RAWFESTIVAL'" :subtitle="'Jl. Pintu Satu Senayan No.1, RT.1/RW.3, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat'" :itemNumber="null" :itemTitle="null"
                :image="asset('assets/img/rawfest/loc-event-2.webp')" :buttonLink="'https://maps.app.goo.gl/X5k1hUa7wHE2FG9k6'" :buttonTitle="'Buka Google Maps'" />
            <x-how-to-get-card :topTitle="'Check-In Point'" :title="'OPEN GATE: 09.00 WIB'" :subtitle="''" :itemNumber="null" :itemTitle="null"
                :image="asset('assets/img/rawfest/basket_hall_entry.webp')" :buttonLink="'https://maps.app.goo.gl/X5k1hUa7wHE2FG9k6'" :buttonTitle="'Datang 15 menit sebelum acara mulai'" />
        </div>
        <div
            class="flex flex-wrap justify-center gap-3 md:gap-10 text-center bg-[#D9D9D9] pt-3 pb-10 md:py-10 px-3 sm:px-10 lg:px-50 z-10 ">
            <x-how-to-get-card :topTitle="'Parking & Drop-off'" :title="'Area Parkir'" :subtitle="null" :itemNumber="['1', '2']"
                :itemTitle="['Parkir  Motor', 'Parkir  Mobil']" :itemContent="[
                    [
                        ['text' => 'Parkir Stadion Madya', 'link' => null],
                        ['text' => 'Parkiran Seberang Indonesia Arena', 'link' => null],
                        ['text' => 'Parkiran Aquatic', 'link' => null],
                        ['text' => 'Parkiran Gedung Parking Utara', 'link' => null],
                        ['text' => 'Parkiran Gedung Parking Timur', 'link' => null],
                    ],
                    [
                        ['text' => 'Parkir Stadion Madya', 'link' => null],
                        ['text' => 'Parkiran Tenis Indoor', 'link' => null],
                        ['text' => 'Parkiran Seberang Indonesia Arena', 'link' => null],
                        ['text' => 'Parkiran Lapangan ABC', 'link' => null],
                        ['text' => 'Parkiran Aquatic', 'link' => null],
                        ['text' => 'Parkiran Gedung Parking Utara', 'link' => null],
                        ['text' => 'Parking Utara', 'link' => null],
                        ['text' => 'Parking Timur', 'link' => null],
                        ['text' => 'Parkiran Gedung Parking Timur', 'link' => null],
                        ['text' => 'Parkiran Istora Senayan', 'link' => null],
                    ],
                ]" :image="null" :buttonLink="asset('assets/doc/titik_parkir_rawfest.pdf')" :buttonTitle="'Lihat Map Parkir'" />

            <x-how-to-get-card :topTitle="'Transport Guide'" :title="'Cara ke Lokasi'" :subtitle="null" :itemNumber="['1', '2', '3']"
                :itemTitle="['KAI Commuter', 'MRT Jakarta', 'Transjakarta (BRT)']" :itemContent="[
                    [
                        [
                            'text' => 'Stasiun Palmerah',
                            'link' => 'https://maps.app.goo.gl/5JSaekm9q7N6HQ729',
                        ],
                    ],
                    [
                        [
                            'text' => 'Stasiun Istora Mandiri',
                            'link' => 'https://maps.app.goo.gl/A7KAcwdmsgqQBSxRA',
                        ],
                        [
                            'text' => 'Stasiun Senayan',
                            'link' => 'https://maps.app.goo.gl/YuXpuR8Wfom6J64p7',
                        ],
                    ],
                    [
                        [
                            'text' => 'Halte Gelora Bung Karno',
                            'link' => 'https://maps.app.goo.gl/KX5Uso4jra1z4mmB6',
                        ],
                        [
                            'text' => 'Halte Senayan JCC',
                            'link' => 'https://maps.app.goo.gl/q2Un4r3ydhYeZs2i7',
                        ],
                    ],
                ]" :image="null" :buttonLink="'https://maps.app.goo.gl/X5k1hUa7wHE2FG9k6'" :buttonTitle="'Cek Lokasi Event'" />

        </div>
    </section>

    {{-- Sponsor --}}
    <section class="bg-[#FFFFFF] py-20 px-3 sm:px-10 lg:px-50 z-10 ">
        {{-- presented --}}
        {{-- <div class="text-center">
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

        </div> --}}

        {{-- sponsored by --}}
        <div class="text-center mt-20">
            <h1 class=" ultraprint-font uppercase p-3 text-4xl md:text-5xl rounded-2xl text-[#0353FF] font-normal">
                Sponsored</h1>
            <div class="flex justify-center flex-wrap gap-2 md:gap-10  my-4">
                @if ($sponsors->isEmpty())
                    <p class="text-center text-lg text-gray-500">No Sponsors right now</p>
                @else
                    @foreach ($sponsors as $item)
                        <img src="{{ asset('storage/' . $item->logo) }}" alt="{{ $item->name }}"
                            class=" object-contain w-[70px] md:w-[200px] ">
                    @endforeach
                @endif
            </div>
        </div>
    </section>


    @if (Route::is('rawfest'))
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
