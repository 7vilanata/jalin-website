@extends('layouts.app')

@section('content')
    <div class="relative z-0 mb-[-50px] ">
        <div class="lazy-background z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative"
            style="background-image: url('{{ asset('assets/gif/mesh-gradient.gif') }}');;">
            <div class="flex h-full w-full mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/explore/article.webp') }}"
                    alt="article">
                <img class="h-auto w-full self-end z-0 block md:hidden"
                    src="{{ asset('assets/img/explore/article-mobile.webp') }}" alt="article-mobile">
            </div>
        </div>
        <div class=" bg-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-10 md:px-15 z-10 relative">
            <a href="{{ route('explore') }}" class="text-[#0353FF]">
                < Back </a>

                    <div class="my-10 text-center">
                        <h1
                            class="uppercase ultraprint-font block p-3 text-4xl md:text-5xl  rounded-2xl mb-2 text-[#0353FF] font-medium">
                            articles</h1>
                        @if ($articles->isEmpty())
                            <p class="text-center text-lg text-gray-500">No articles right now</p>
                        @else
                            <div class="flex justify-center">
                                <div
                                    class="flex flex-wrap justify-center lg:justify-start gap-4 my-10 max-w-screen-xl w-full">
                                    @foreach ($articles as $article)
                                        <x-card :campaign="$article->campaign_type" :title="$article->title" :image="asset('storage/' . $article->thumbnail)" :link="route('explore.articles.show', $article->slug)" />
                                    @endforeach
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="mt-4">
                                {{ $articles->links() }} <!-- Pagination links -->
                            </div>
                        @endif
                    </div>
        </div>
    </div>
@endsection
