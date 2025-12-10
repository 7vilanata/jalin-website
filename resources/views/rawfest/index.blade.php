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
                <a href="https://student.generasiraw.org/login" class="inline-block ">
                    <button
                        class="hover:scale-110 ease-in-out text-[16px] md:text-4xl flex items-center bg-[#0353FF] py-1.5 px-8 text-white rounded-3xl absolute z-10 bottom-1/8 left-1/2 transform -translate-x-1/2 transition-all duration-300">
                        <span class="ultraprint-font">DAFTAR DISINI!</span>
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
                HOW TO SUBMIT DEMO FOR SCHOOL PERFORMANCE </h1>

            <div class="flex justify-center items-center w-full">
                <div class=" flex flex-wrap flex-col justify-center items-center w-[90%] md:w-[80%] mt-8">
                    <div x-data="{ open: false, zoom: 1, isDown: false, startX: 0, scrollLeft: 0, threshold: 5 }" class="flex justify-center">

                        <!-- Thumbnail Image -->
                        <img src="{{ asset('assets/img/rawfest/band-comp.webp') }}" alt="band-comp" draggable="false"
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
                                    <img src="{{ asset('assets/img/rawfest/band-comp.webp') }}" draggable="false"
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
            <p class=" my-3 text-[14px] md:text-2xl">Mau join? klik link 
                <a class="underline" href="https://bit.ly/RAWBandCompetition">disini</a></p>

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
                Udah ngumpulin poin dan pengen ngerasain serunya RAW Festival? Gini cara lo dapetin tiketnya, bro 👇
                <br><br>
                <b>Langkah-langkahnya gampang banget:</b>
            </p>
            <br>
            <ol class="list-decimal pl-10 text-[14px] md:text-2xl leading-snug">
                <li>Masuk ke WebApp resmi di <a href="https://student.generasiraw.org"
                        class="text-blue-500 underline">student.generasiraw.org</a>.</li>
                <li>Login pake akun yang udah lo punya (jangan bikin baru ya, bro).</li>
                <li>Masuk ke menu “Poin” di dashboard lo.</li>
                <li>Cari bagian “Ticket RAW Festival”.</li>
                <li>Tukerin poin lo buat dapetin tiket RAW Festival 2026!</li>
                <li>Setelah ditukar, lo bakal dapet kode unik tiket yang bisa lo redeem di menu “Redeem Ticket”.</li>
                <li>Redeem kode lo dan dapetin e-pass QR Code, tunjukin pas di gate waktu acara nanti.</li>
            </ol>
            <br>
            <p class="text-[14px] md:text-2xl">
                🔥 Catatan penting:
                <br>
                <br>
            <ol class="list-disc pl-10 text-[14px] md:text-2xl leading-snug">
                <li>Tiket cuma bisa dituker selama stok masih ada, jadi jangan kelamaan mikir!</li>
                <li> QR Code lo adalah tiket resmi — jangan dishare ke siapa pun!</li>
            </ol>
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
        <div class=" text-center bg-[#D9D9D9] py-20 md:py-50 px-3 sm:px-10 lg:px-50 z-10 ">
            <h1 class="ultraprint-font text-2xl md:text-8xl text-white">COMING SOON</h1>
        </div>
    </section>

    {{-- rundown --}}
    <section class="bg-[#FFFFFF]">
        <div class="text-center  pt-20 pb-5 px-3 sm:px-10 lg:px-50 z-10 ">
            <h1 class=" ultraprint-font uppercase p-3 text-4xl md:text-5xl rounded-2xl text-[#0353FF] font-normal">
                RUNDOWN</h1>
        </div>
        <div class=" text-center bg-[#D9D9D9] py-20 md:py-50 px-3 sm:px-10 lg:px-50 z-10 ">
            <h1 class="ultraprint-font text-4xl md:text-8xl text-white">COMING SOON</h1>
        </div>
    </section>

    {{-- LOCATION --}}
    <section class="bg-[#FFFFFF]">
        <div class="text-center  py-20 px-3 sm:px-10 lg:px-50 z-10 ">
            <h1 class=" ultraprint-font uppercase p-3 text-4xl md:text-5xl rounded-2xl text-[#0353FF] font-normal">
                HOW TO GET TO LOCATION</h1>
        </div>
        <div class=" text-center bg-[#D9D9D9] py-20 md:py-50 px-3 sm:px-10 lg:px-50 z-10 ">
            <h1 class="ultraprint-font text-4xl md:text-8xl text-white">COMING SOON</h1>
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
                Sponsored By</h1>
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
