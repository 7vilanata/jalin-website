@extends('layouts.app')

@section('content')
    <div class="relative z-0 mb-[-50px] ">
        <div class="lazy-background z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative">
            <div class="flex h-full w-full mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/boy-explore.webp') }}"
                    alt="boy-explore">
                <img class="h-auto w-full self-end z-0 block md:hidden"
                    src="{{ asset('assets/img/boy-explore-mobile.webp') }}" alt="boy-explore-mobile">

            </div>
        </div>
        <div class=" bg-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-10 md:px-15 z-10 relative">

            <div class="my-10 text-center">
                <h1
                    class="uppercase ultraprint-font block p-3 text-4xl md:text-5xl rounded-2xl mb-2 text-[#0353FF] font-medium">
                    quiz</h1>

                @if ($quizzes->isEmpty())
                    <p class="text-center text-lg text-gray-500">No quiz right now</p>
                @else
                    <div class="flex justify-center">

                        <div class="flex flex-wrap justify-center gap-4 my-10 max-w-screen-xl w-full">
                            @foreach ($quizzes as $quiz)
                                <x-card :campaign="'Quiz'" :alt="null" :title="$quiz->title" :image="asset('storage/' . $quiz->thumbnail)" :link="$quiz->destination_link" />
                            @endforeach
                        </div>
                    </div>
                    <a href="{{ url('/explore/quiz') }}" class="inline-block ">
                        <button type="button"
                            class="btn btn-primary rounded-2xl cursor-pointer text-[18px] bg-[#0353FF] text-white inline-block px-4 py-2">
                            Lihat Selengkapnya
                        </button>
                    </a>
                @endif
            </div>
            <div class="my-10 text-center">
                <h1
                    class="uppercase ultraprint-font block p-3 text-4xl md:text-5xl rounded-2xl mb-2 text-[#0353FF] font-medium">
                    Article
                </h1>
                @if ($articles->isEmpty())
                    <p class="text-center text-lg text-gray-500">No articles right now</p>
                @else
                    <div class="flex justify-center">
                        <div class="flex flex-wrap justify-center gap-4 my-10 max-w-screen-xl w-full">
                            @foreach ($articles as $article)
                                <x-card :campaign="$article->campaign_type" :title="$article->title" :image="asset('storage/' . $article->thumbnail)" :alt="$article->thumbnail_alt_text"  :link="route('explore.articles.show', $article->slug)" />
                            @endforeach
                        </div>
                    </div>
                    <a href="{{ url('/explore/articles') }}" class="inline-block">
                        <button type="button"
                            class="btn btn-primary rounded-2xl cursor-pointer text-[18px] bg-[#0353FF] text-white inline-block px-4 py-2">
                            Lihat Selengkapnya
                        </button>
                    </a>
                @endif

            </div>
            <div class="my-10 text-center">
                <h1
                    class="uppercase ultraprint-font block p-3 text-4xl md:text-5xl  rounded-2xl mb-2 text-[#0353FF] font-medium">
                    RAW Videos</h1>
                @if ($videos->isEmpty())
                    <p class="text-center text-lg text-gray-500">No videos right now</p>
                @else
                    <div class="flex justify-center p-0 w-full">
                        <div class="flex flex-wrap justify-center  gap-4 my-10 max-w-screen-xl w-full">
                            @foreach ($videos as $video)
                                <iframe class="w-full  md:w-[32%] h-[201px] md:h-[300px] rounded-2xl"
                                    src="{{ $video->embed_link }}" frameborder="0" allowfullscreen>
                                </iframe>
                            @endforeach

                        </div>
                    </div>
                    <a href="{{ url('/explore/raw-videos') }}" class="inline-block ">
                        <button type="button"
                            class="btn btn-primary rounded-2xl cursor-pointer text-[18px] bg-[#0353FF] text-white inline-block px-4 py-2">
                            Lihat Selengkapnya
                        </button>
                    </a>
                @endif
            </div>

        </div>
    </div>
@endsection
