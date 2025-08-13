@extends('layouts.app')

@section('content')
    <div class="relative">
        <div class=" z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative"
            style="background-image: url('{{ asset('assets/img/atf-bg.webp') }}');">
            <div
                class="flex flex-col md:flex-row h-full w-full md:w-[90%] mx-auto justify-end md:justify-between items-center">
                <div class="max-w-[80%] md:max-w-full">
                    <h1 class=" text-white font-bold  text-4xl md:text-[35px] lg:text-6xl leading-tight  uppercase">Saatnya
                        tunjukin <br class="block md:none" />
                        <img class="inline-block w-[20%] mt-[-10px]" src="{{ asset('assets/img/logo-raw.webp') }}"
                            alt="logo-raw">
                        power lo!
                    </h1>
                    <h1
                        class=" mt-2 bg-[#FEFC8B] inline-block p-1 md:p-3  text-[20px] md:text-2xl lg:text-4xl rounded-[10px] md:rounded-2xl text-[#0353FF] font-bold">
                        #GenerasiGaButuhValidasi</h1>
                </div>

                <img class="h-auto w-full md:w-[60%] lg:w-[55%] mr-0 md:mr-[-70px]  self-end z-0"
                    src="{{ asset('assets/img/image-boy-atf.webp') }}" alt="image-boy-atf">
            </div>
        </div>
        <div class="bg-white rounded-t-[50px] md:rounded-t-[100px] text-center py-20 mt-[-80px] px-5 md:px-20 z-10 relative">
            <h1 class=" uppercase text-[#0353FF] ultraprint-font text-center p-3 text-3xl md:text-7xl font-medium">
                news & update</h1>


        </div>

    </div>

    <style>

    </style>
@endsection
