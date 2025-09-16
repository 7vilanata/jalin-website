@extends('layouts.app')

@section('content')
    <div class="relative z-0 mb-[-50px] ">
        <div class="lazy-background z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative"
            style="background-image: url('{{ asset('assets/gif/mesh-gradient.gif') }}');">
            <div class="flex h-full w-full mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/boy-contact.webp') }}"
                    alt="boy-contact">
                <img class="h-auto w-full self-end z-0 block md:hidden"
                    src="{{ asset('assets/img/boy-contact-mobile.webp') }}" alt="boy-contact-mobile">
           
            </div>
        </div>
        <div
            class=" bg-gradient-to-t from-[#FF5632] via-[#FFFFFF] to-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-10 md:px-20 lg:px-50 z-10 relative">
            <div class="my-10 text-center">
                <h1 class="uppercase ultraprint-font inline-block p-3 text-5xl  rounded-2xl mb-2 text-[#0353FF] font-medium">
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
