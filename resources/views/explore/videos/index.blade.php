@extends('layouts.app')

@section('content')
    <div class="relative z-0 mb-[-50px] ">
        <div class="lazy-background z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative">
            <div class="flex h-full w-full mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/explore/rawvideo.webp') }}"
                    alt="rawvide">
                <img class="h-auto w-full self-end z-0 block md:hidden"
                    src="{{ asset('assets/img/explore/rawvideo-mobile.webp') }}" alt="rawvide-mobile">
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
        <div class=" bg-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-10 md:px-15 z-10 relative">
            <a href="{{ route('explore') }}" class="text-[#0353FF]">
                < Back </a>

                    <div class="my-10 text-center">
                        <h1
                            class="uppercase ultraprint-font block p-3 text-4xl md:text-5xl  rounded-2xl mb-2 text-[#0353FF] font-medium">
                            Raw Videos</h1>
                        @if ($videos->isEmpty())
                            <p class="text-center text-lg text-gray-500">No videos right now</p>
                        @else
                            <div class="flex justify-center">
                                <div
                                    class="flex flex-wrap justify-center relative mt-5 md:mt-25   overflow-hidden  lg:justify-start gap-4 my-10 max-w-screen-xl w-full">
                                    @foreach ($videos as $video)
                                        <iframe class="w-full  md:w-[32%] h-[201px] md:h-[300px] rounded-2xl"
                                            src="{{ $video->embed_link }}" frameborder="0" allowfullscreen>
                                        </iframe>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="mt-4">
                                {{ $videos->links() }} <!-- Pagination links -->
                            </div>
                        @endif

                    </div>
        </div>
    </div>
@endsection
