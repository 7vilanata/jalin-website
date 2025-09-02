@extends('layouts.app')

@section('content')
    <div class="relative z-0 mb-[-50px] ">
        <div class=" z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative"
            style="background-image: url('{{ asset('assets/img/atf-bg.webp') }}');">
            <div class="flex h-full w-full mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/explore/magazine.webp') }}"
                    alt="magazine">
                <img class="h-auto w-full self-end z-0 block md:hidden" src="{{ asset('assets/img/explore/magazine-mobile.webp') }}"
                    alt="magazine-mobile">
            </div>
        </div>
        <div class=" bg-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-10 md:px-15 z-10 relative">
            <a href="{{ route('explore') }}" class="text-[#0353FF]">
                < Back </a>

                    <div class="my-10 text-center">
                        <h1
                            class="uppercase ultraprint-font block p-3 text-4xl md:text-5xl  rounded-2xl mb-2 text-[#0353FF] font-medium">
                            Raw Videos</h1>
                        {{-- <div class="flex justify-center">
                            <div class="flex flex-wrap justify-center lg:justify-start gap-4 my-10 max-w-screen-xl w-full">
                                @foreach ($magazines as $magazine)
                                    <x-image-card :title="$magazine->title" :image="asset('storage/' . $magazine->thumbnail)" :link="$magazine->download_link" />
                                @endforeach
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="mt-4">
                            {{ $magazines->links() }} <!-- Pagination links -->
                        </div> --}}
                    </div>
        </div>
    </div>
@endsection
