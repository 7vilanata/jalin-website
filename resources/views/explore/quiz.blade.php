@extends('layouts.app')

@section('content')
    <div class="relative z-0 mb-[-50px] ">
        <div class=" z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative"
            style="background-image: url('{{ asset('assets/img/atf-bg.webp') }}');">
            <div class="flex h-full w-full mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/explore/quiz.webp') }}"
                    alt="magazine">
            </div>
        </div>
        <div
            class=" bg-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-10 md:px-20 lg:px-50 z-10 relative">
            <div class="my-10 text-center">
                <h1
                    class="uppercase ultraprint-font block p-3 text-4xl md:text-5xl  rounded-2xl mb-2 text-[#0353FF] font-medium">
                    quiz</h1>
                <button type="submit" class="btn btn-primary rounded-2xl  text-[18px] bg-[#0353FF] text-white inline-block px-4 py-2">
                    Lihat Selengkapnya
                </button>
            </div>
        </div>
    </div>
@endsection
