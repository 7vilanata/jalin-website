@extends('layouts.app')

@section('content')
    <div class="relative z-0 mb-[-50px] ">
        <div class=" z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative"
            style="background-image: url('{{ asset('assets/img/atf-bg.webp') }}');">
            <div class="flex h-full w-full mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/explore/article.webp') }}"
                    alt="magazine">
            </div>
        </div>
        <div
            class=" bg-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-10 md:px-20 lg:px-50 z-10 relative">
            <div class="my-10 text-center">
                <h1
                    class="uppercase ultraprint-font block p-3 text-4xl md:text-5xl  rounded-2xl mb-2 text-[#0353FF] font-medium">
                    article</h1>
                <div class="space-y-4">
                    @foreach ($articles as $article)
                        <x-card :campaign="$article->campaign_type" :title="$article->title"  :image="asset('storage/' . $article->thumbnail)" :link="route('explore.articles.show', $article->slug)" />
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-4">
                    {{ $articles->links() }} <!-- Pagination links -->
                </div>
            </div>
        </div>
    </div>
@endsection
