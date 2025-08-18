@extends('layouts.app')

@section('content')
    <div class="relative">
        <div class=" z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative"
            style="background-image: url('{{ asset('assets/img/atf-bg.webp') }}');">
            <div class="flex h-full w-full  mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/boy-warkop.webp') }}"
                    alt="boy-warkop">
                <img class="h-auto w-full self-end z-0 block md:hidden" src="{{ asset('assets/img/boy-warkop-mobile.webp') }}"
                    alt="boy-warkop-mobile">
            </div>
        </div>
        <div class="  bg-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-10 md:px-50 z-10 relative">
            <h1 style="font-weight: 400"
                class="ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
                ABOUT WARKOP RAWVOLUTION</h1>
            <p class="text-[#0353FF] my-3 text-[14px] md:text-2xl"> <b>Warkop RAWvolution</b> itu lebih dari sekadar tempat
                nongkrong.
                <br>
                <br>
                Ini tentang gimana kita ngebikin tempat ngopi jadi ruang seru dan bermakna. Bareng gerakan Generasi RAW,
                kita punya ruang buat bebas jadi diri sendiri, berekspresi, dan berkembang bareng teman-teman yang suportif
                dan satu vibe.
                <br>
                <br>
                Di sini, kita nongkrong bisa sambil ngumpulin poin, ikutan tantangan, main game, tampil, sampai bikin karya
                pertama lo sendiri. Tempat ini jadi wadah kita buat tumbuh bareng sambil tetap seru.
            </p>
            <h1 class="text-center font-bold text-[#0353FF] text-[14px] md:text-2xl mt-10 mb-5">
                Ada dua jenis warkop disini:
            </h1>
            <div class="flex flex-wrap flex-row justify-center gap-3 mb-10">
                <div class=" w-full md:w-5/12 pb-6 bg-white border  rounded-2xl shadow-xl dark:bg-gray-800 ">
                    <h1 class="font-bold bg-[#FF5632] p-3 text-2xl text-center rounded-2xl text-[#FFFFFF]">
                        Base Hub</h1>
                    <p class="px-5 text-[#0353FF] my-3 text-center text-[14px] md:text-[20px]">
                        Ruang yang dibuat untuk menampung aktivitas besar seperti workshop, performance, showcase, dan event
                        komunitas. Tempat ini jadi pusat energi kreatif yang dinamis dan ekspresif, ngasih space buat segala
                        hal.
                    </p>
                </div>
                <div class="  w-full md:w-5/12 pb-6 bg-white border rounded-2xl shadow-xl dark:bg-gray-800 ">
                    <h1 class="font-bold bg-[#FF5632] p-3 text-2xl text-center rounded-2xl text-[#FFFFFF]">
                        Corner Hub</h1>
                    <p class="px-5 text-[#0353FF] my-3 text-center text-[14px] md:text-[20px]">
                        Ruang kecil yang dekat, hangat, dan low-key. Formatnya kayak kantung nongkrong tempat ngobrol, tuker
                        ide mentah, atau recharge energi. Gak pretensius, cocok buat interaksi yang lebih santai.
                    </p>
                </div>
            </div>
            <p class="text-[#0353FF] text-center my-3 text-[14px] md:text-2xl">
                <b>Ini ruang bareng. Ini gerakan bareng.</b> <br>
                Yuk ikuti perjalanannya, gabung komunitasnya, dan rasain langsung serunya!
                <br><br>
                <b>Let’s hang, grow, and be part of Generasi RAW!</b>
            </p>

            <div class="my-30 text-center">
                <h1 class="ultraprint-font inline-block p-3 text-4xl md:text-5xl  rounded-2xl mb-2 text-[#0353FF] font-medium">
                    UPCOMING SCHEDULE</h1>
            </div>
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
        <div class="bg-blue-600 text-white py-20 md:py-50 px-8 relative">
            <div class="flex flex-col justify-center">
                <div class="flex justify-center items-center space-x-8 lg:mx-20 relative z-0">
                    <div class="my-30 text-center">
                        <h1
                            class="ultraprint-font inline-block uppercase p-3 text-4xl md:text-5xl  rounded-2xl mb-2 text-white font-medium">
                            WARKOP LOCATIONS</h1>
                        <div id="location-buttons">
                            <button type="button"
                                class="location-btn font-bold text-[18px] text-white border-2 border-[#FF5632]  rounded-full px-5 py-2.5 text-center me-2 mb-2 bg-[#FF5632]">
                                Base Hub
                            </button>
                            <button type="button"
                                class="location-btn text-white text-[18px] border-2 border-[#FF5632]  rounded-full font-bold  px-5 py-2.5 text-center me-2 mb-2 bg-transparent">
                                Corner Hub
                            </button>
                        </div>
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
            <h1 class=" ultraprint-font uppercase  inline-block p-3 text-4xl md:text-5xl rounded-2xl text-[#0353FF] font-normal">
                Event Documentation</h1>

            {{-- <div class="flex justify-center">
                @include('components.instagram')
            </div> --}}
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
    <script>
        const buttons = document.querySelectorAll('.location-btn');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                buttons.forEach(b => {
                    b.classList.remove('bg-[#FF5632]');
                    b.classList.add('bg-transparent');
                });
                btn.classList.remove('bg-transparent');
                btn.classList.add('bg-[#FF5632]');
            });
        });
    </script>
@endsection
