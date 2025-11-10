@extends('layouts.app')

@section('content')
    <div class="relative z-0 mb-[-50px] ">
        <div class="lazy-background z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative">
            <div class="flex h-full w-full mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/boy-contact.webp') }}"
                    alt="boy-contact">
                <img class="h-auto w-full self-end z-0 block md:hidden"
                    src="{{ asset('assets/img/boy-contact-mobile.webp') }}" alt="boy-contact-mobile">
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
        <div
            class=" bg-gradient-to-t from-[#FF5632] via-[#FFFFFF] to-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-10 md:px-20 lg:px-50 z-10 relative">
            <div class="my-10 text-center">
                <h1
                    class="uppercase ultraprint-font inline-block p-3 text-5xl  rounded-2xl mb-2 text-[#0353FF] font-medium">
                    contact us</h1>
            </div>
            <p class="text-[#0353FF] my-3 text-[16px] text-center md:text-2xl"> Komplain? Boleh. Saran? Apalagi. Kolab? Gas!
                Isi
                form-nya, jangan malu-malu.
            </p>
            @livewire('contact-form')
        </div>
    </div>
@endsection
