@php($hideFooter = true)
@extends('layouts.app')

@section('content')
    <div class=" z-0 h-[103vh] w-full  overflow-x-hidden bg-cover relative"
        style="background-image: url('{{ asset('assets/img/atf-bg.webp') }}');">
        <div
            class="flex flex-col md:flex-row h-full w-full  justify-self-center justify-center items-center">
            <div class="max-w-[80%] md:max-w-full">
                <h1 class=" ultraprint-font text-white font-medium md:text-9xl text-6xl leading-tight  uppercase">COMING SOON
                </h1>
            </div>
        </div>
    </div>
@endsection
