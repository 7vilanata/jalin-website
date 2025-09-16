@extends('layouts.app')

@section('content')
    <div class="relative z-0 mb-[-50px]">
        <!-- Background image container -->
        <div class="lazy-background z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative">
            <div class="flex h-full w-full mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/boy-warkop.webp') }}"
                    alt="boy-warkop">
                <img class="h-auto w-full self-end z-0 block md:hidden" src="{{ asset('assets/img/boy-warkop-mobile.webp') }}"
                    alt="boy-warkop-mobile">
            </div>
        </div>

        <!-- Content section -->
        <div class="bg-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-8 md:py-20 mt-[-80px] px-6 md:px-15 z-10 relative">
            <!-- Back button -->
            <a href="{{ url('/warkop-raw/gallery') }}" class="text-[#0353FF] text-sm md:text-lg">&lt; Back</a>

            <!-- Article content -->
            <div class="my-10 ">
                <div class="flex flex-col text-center  px-5 md:px-20 ">
                    <h1
                        class="uppercase ultraprint-font block text-4xl md:text-6xl rounded-2xl mb-2 text-[#0353FF] font-medium">
                        {{ $gallery->title }}
                    </h1>
                    <div class="justify-center flex flex-wrap gap-3 md:gap-10 text-[#0353FF] text-[16px]">
                        <span class="flex text-left  items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            {{ $gallery->street_loc }}</span>
                        <span class="flex text-left items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                            </svg>
                            {{ \Carbon\Carbon::parse($gallery->image_date)->format('d F Y') }}</span>
                    </div>
                </div>
                {{-- article thumbnail  --}}
                <div class="flex justify-center my-10">
                    <img src="{{ asset('storage/' . $gallery->thumbnail) }}" alt="{{ $gallery->title }}"
                        class="w-full h-full object-stretch rounded-2xl ">
                </div>
                <!-- Article content -->
                <div class="article-content text-sm md:text-lg text-[#0353FF] text-left md:text-center leading-relaxed prose">
                    {!! $gallery->content !!}
                </div>

            </div>
        </div>
    </div>
    <style>
        .article-content ul {
            list-style-type: disc;
            /* Ensure bullets are displayed */
            padding-left: 20px;
            /* Add space for bullets */
        }
    </style>
@endsection
