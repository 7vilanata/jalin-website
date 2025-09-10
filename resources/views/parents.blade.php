@extends('layouts.app')

@section('content')
    <section class="relative">
        <section class=" z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative"
            style="background-image: url('{{ asset('assets/gif/mesh-gradient.gif') }}');">
            <div class="flex h-full w-full mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/boy-parents.webp') }}"
                    alt="boy-parents">
                <img class="h-auto w-full self-end z-0 block md:hidden"
                    src="{{ asset('assets/img/boy-parents-mobile.webp') }}" alt="boy-parents-mobile">
            </div>
        </section>
        <section class=" bg-white rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-10 md:px-50 z-10 relative">
            <div>
                <h1 style="font-weight: 400"
                    class="uppercase ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
                    Hi Parents!</h1>
                <p class="text-[#0353FF] my-3 text-[14px] md:text-2xl">
                    Di Generasi RAW, kami: para remaja cowok, percaya bahwa
                    cowok bisa tumbuh jadi pribadi yang tahan banting, pede, dan tahu arah hidupnya sendiri. Kita tahu,
                    orang
                    tua pasti pengen yang terbaik buat anaknya. Nah, movement ini hadir buat bantu mewujudkan itu, dengan
                    cara
                    yang relate sama dunia kami.
                </p>
            </div>
            <div class="mt-[10%]">
                <h1 style="font-weight: 400"
                    class="uppercase ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
                    Apaan sih Generasi RAW?</h1>
                <p class="text-[#0353FF] my-3 text-[14px] md:text-2xl">
                    Generasi RAW adalah movement dan ruang aman yang kami bentuk sendiri—buat remaja cowok usia 12–19 tahun.
                    Di sini, kami belajar kenal diri, bangun kepercayaan diri, dan punya keberanian buat bilang “nggak” ke
                    hal-hal negatif.
                    <br><br>
                    Kami bikin konten, cerita, dan aktivitas yang deket banget sama hidup remaja sekarang. Bukan teori
                    doang, tapi sesuatu yang kami alami sendiri. Lewat sosial media, event komunitas, sampai tempat
                    tongkrongan kayak Warkop RAWvolution, semua kami bentuk biar jadi ruang yang bermakna dan gak nge-judge.
                </p>
            </div>
            <div class="mt-[10%]">
                <h1 style="font-weight: 400"
                    class="uppercase ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
                    Apa sih manfaat Movement Ini?</h1>
                <p class="text-[#0353FF] my-3 text-[14px] md:text-2xl">
                    Kami Generasi RAW saling bantu buat tumbuh bareng. Lewat obrolan dan aktivitas yang nggak menggurui.
                    Kita sadar, tumbuh itu proses. Nggak semua harus instan. Tapi kami jalanin bareng-bareng. Lewat Generasi
                    RAW, kami belajar hal-hal penting, tapi dengan cara yang relate dan masuk akal buat kita:
                <ul class="list-inside space-y-3 text-[#0353FF] text-[14px] md:text-2xl ml-3">
                    <li class="flex items-start ">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Merawat diri (tanpa drama)</p>

                            Kita mulai sadar soal pentingnya jaga badan & mental.
                            Dari istirahat cukup, kesehatan, sampai coping stress.
                        </div>
                    </li>

                    <li class="flex items-start">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Punya ‘no’ yang berani</p>
                            Kami belajar nolak rokok, vape, alkohol, dan pengaruh nggak sehat—tanpa takut dicap
                            beda.
                        </div>
                    </li>

                    <li class="flex items-start">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Mikir panjang, bukan cuma ikut arus</p>
                            Soal pertemanan, tantangan hidup, bahkan risiko - risikonya.
                            Kami belajar bikin keputusan yang nggak asal-asalan.
                        </div>
                    </li>

                    <li class="flex items-start">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Nggak gampang tumbang</p>
                            Kami saling kuatkan biar tetap percaya diri meski sosial media, lingkungan, atau tekanan
                            hidup nyoba ngejatuhin.
                        </div>
                    </li>

                    <li class="flex items-start">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Belajar jadi Bijak</p>
                            Jadi bijak bukan sekedar mampu berfikir panjang, tapi juga memutuskan dengan sadar dan
                            bertanggung jawab atas apa yang kami putuskan.
                        </div>
                    </li>
                </ul>

                </p>
            </div>

            <div class="mt-[10%]">
                <h1 style="font-weight: 400"
                    class="uppercase ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
                    Apa yang Kami Tawarkan</h1>
                <p class="text-[#0353FF] my-3 text-[14px] md:text-2xl">
                    Kami bikin banyak aktivitas dan ruang belajar yang fun dan relevan semua dari kami, untuk kami:
                <ul class="list-inside space-y-3 text-[#0353FF] text-[14px] md:text-2xl ml-3">
                    <li class="flex items-start ">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Sosial Media & Website Generasi RAW</p>
                            Tempat aman buat eksplor, belajar, dan berkembang.
                        </div>
                    </li>

                    <li class="flex items-start">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Workshop & Event</p>
                            Ruang interaktif buat asah soft skill, nambah temen, dan nemuin potensi.
                        </div>
                    </li>

                    <li class="flex items-start">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold"> Komunitas yang Supportif</p>
                            Tempat di mana kami bisa jadi diri sendiri, tanpa takut dihakimi.
                        </div>
                    </li>

                    <li class="flex items-start">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Nggak gampang tumbang</p>
                            Kami saling kuatkan biar tetap percaya diri meski sosial media, lingkungan, atau tekanan
                            hidup nyoba ngejatuhin.
                        </div>
                    </li>

                    <li class="flex items-start">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Belajar jadi Bijak</p>
                            Jadi bijak bukan sekedar mampu berfikir panjang, tapi juga memutuskan dengan sadar dan
                            bertanggung jawab atas apa yang kami putuskan.
                        </div>
                    </li>
                </ul>
                </p>
            </div>

            <div class="mt-[10%]">
                <h1 style="font-weight: 400"
                    class="uppercase ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
                    Kenapa Ini Penting Buat Orang Tua</h1>
                <p class="text-[#0353FF] my-3 text-[14px] md:text-2xl">
                    Kami tahu masa remaja itu ribet, penuh pilihan, dan nggak selalu gampang. Tapi justru di sini kami
                    belajar:
                <ul class="list-inside space-y-3 text-[#0353FF] text-[14px] md:text-2xl ml-3">
                    <li class="flex items-start ">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Tahan banting</p>
                            Biar nggak gampang tumbang pas realitas gak sesuai ekspektasi.
                        </div>
                    </li>

                    <li class="flex items-start">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Berani ambil keputusan</p>
                            Kami belajar mikir sebelum melangkah, bukan sekadar ikut-ikutan.
                        </div>
                    </li>

                    <li class="flex items-start">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Punya pendirian</p>
                            Biar nggak goyah cuma karena tekanan teman atau lainnya.
                        </div>
                    </li>

                    <li class="flex items-start">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Sayang diri sendiri</p>
                            Mulai dari hal kecil kayak istirahat cukup sampai bikin keputusan yang bertanggung jawab.
                        </div>
                    </li>
                </ul>

                </p>
            </div>

            <div class="mt-[10%]">
                <h1 style="font-weight: 400"
                    class="uppercase ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
                    Peran Orang Tua Tetap Penting</h1>
                <p class="text-[#0353FF] my-3 text-[14px] md:text-2xl">
                    Kita mungkin lagi nyari jati diri, tapi orang tua tetap jadi "rumah pertama". Menurut kita Ini cara
                    simple biar tetap connect sama kita:
                <ul class="list-inside space-y-3 text-[#0353FF] text-[14px] md:text-2xl ml-3">
                    <li class="flex items-start ">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Ngobrol bareng</p>
                            Coba mulai dari ngertiin konten kami, lalu bahas soal pertemanan, pilihan hidup, atau
                            kepercayaan diri.

                        </div>
                    </li>
                    <li class="flex items-start">
                        <span
                            class="h-2 w-2 md:h-2.5 md:w-2.5 flex-none rounded-full bg-[#0353FF] mt-1.5 md:mt-3 mr-3"></span>
                        <div>
                            <p class="font-bold">Dukung kami explore</p>
                            Kasih kami ijin atau ajak kami ikut event, baca konten, atau sekadar nemenin ke Warkop
                            RAWvolution dan acara acara Generasi RAW lainnya.
                        </div>
                    </li>

                </ul>
                </p>
            </div>
            <section>
                @include('components.faq')
            </section>
            <div class=" mt-[10%] text-[14px] md:text-2xl">
                <p class=" text-center  rounded-2xl mb-2 text-[#0353FF] font-medium">
                    Kami tahu, jadi remaja cowok hari ini nggak gampang. Tapi kami juga percaya: dengan ruang yang pas dan
                    dukungan yang tulus, kami bisa berdiri kuat, dengan cara kami sendiri.</p>
                <p class="text-center rounded-2xl mt-10 text-[#0353FF] font-semibold">
                    Generasi RAW bukan sekadar komunitas, ini movement yang kami gerakkan bareng-bareng
                </p>
            </div>
            <div class="relative w-full pt-[56.25%] rounded-2xl overflow-hidden mt-5 md:mt-25">
                <div class="absolute flex justify-center items-center top-0 left-0 w-full h-full bg-gray-400">
                    <h1
                        class=" ultraprint-font text-center text-white font-medium md:text-7xl text-4xl leading-tight  uppercase">
                        COMING SOON
                    </h1>
                </div>
                {{-- <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/OZGjJXvqN_U"
                    frameborder="0" allowfullscreen>
                </iframe> --}}
            </div>
            <img class="mt-[20%] h-full w-full object-cover rounded-xl"
                src="{{ asset('assets/img/before-footer-parent.webp') }}" alt="before-footer-parent">
        </section>


    </section>

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
