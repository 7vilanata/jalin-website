@extends('layouts.app')

@section('content')
    <div class="relative z-0 mb-[-50px] ">
        <div class="lazy-background z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative">
            <div class="flex h-full w-full mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/boy-warkop.webp') }}"
                    alt="boy-warkop">
                <img class="h-auto w-full self-end z-0 block md:hidden" src="{{ asset('assets/img/boy-warkop-mobile.webp') }}"
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
        <div class=" bg-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-6 md:px-15 z-10 relative">
            <a href="{{ route('explore') }}" class="text-[#0353FF]  text-sm md:text-lg">
                < Back </a>

                    <div class="my-10 text-center">
                        <h1
                            class="uppercase ultraprint-font block p-3 text-4xl md:text-5xl  rounded-2xl mb-2 text-[#0353FF] font-medium">
                            gallery</h1>
                        <div class="flex justify-center">
                            @if ($galleries->isEmpty())
                                <p class="text-center text-lg text-gray-500">No gallery right now</p>
                            @else
                                <div
                                    class="flex flex-wrap justify-center lg:justify-start gap-10 md:gap-3 my-10 max-w-screen-xl w-full">
                                    @foreach ($galleries as $gallery)
                                        @if ($gallery->slug)
                                            <div>
                                                <a href="{{ route('warkop.gallery.show', $gallery->slug) }}"
                                                    class="bg-white rounded-2xl overflow-hidden shadow-2xl hover:underline block max-w-[418px] h-[200px] md:h-[290px]">
                                                    <!-- Card Image -->
                                                    @if ($gallery->thumbnail)
                                                        <img src="{{ asset('storage/' . $gallery->thumbnail) }}"
                                                            alt="{{ $gallery->title }}"
                                                            class="w-full h-full object-stretch ">
                                                    @endif
                                                </a>
                                                <h4 class=" mt-4 text-[#0353FF] text-[18px] text-left font-bold ">
                                                    {{ $gallery->title }}
                                                </h4>
                                                <div class="text-center flex gap-4 md:gap-10 text-[10px] md:text-[14px]">
                                                    <span class="flex items-center gap-1"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="size-3 md:size-4 min-w-3">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                                        </svg>
                                                        {{ Str::limit( $gallery->street_loc, 20, '...') }}</span>
                                                    <span class="flex items-center gap-1"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="size-3 md:size-4 min-w-3">
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
    </div>
@endsection
