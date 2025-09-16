@php($hideFooter = true)
@extends('layouts.app')

@section('content')
    <div class="lazy-background z-0 h-[106vh] w-full  overflow-x-hidden bg-cover relative"
        style="background-image: url('{{ asset('assets/gif/mesh-gradient.gif') }}');;">
        <div
            class="flex flex-col md:flex-row h-full w-full justify-center items-center">
            <div class="max-w-[80%] md:max-w-full">
                <h1 class=" ultraprint-font text-center text-white font-medium md:text-9xl text-6xl leading-tight  uppercase">COMING SOON
                </h1>
            </div>
        </div>
    </div>
@endsection
