@extends('layouts.app')

@php
    if ($article) {
        $metaTitle = $article->meta_title;
        $metaDescription = $article->meta_description;

        // Set keywords based on locale
        $metaKeywords = $article->meta_keywords;

        // Set Open Graph image
        $ogImage = asset($article->thumbnail ?? '');
        $slug = $article->slug;
        $publishedAt = $article->created_at;
    }
@endphp

@if ($article !== null)
    @section('title', $metaTitle)
    @section('author', 'Admin')
    @section('meta_description', $metaDescription)
    @section('meta_keywords', $metaKeywords)
    @section('published_at', $publishedAt)
    @section('og_title', $metaTitle)
    @section('og_description', $metaDescription)
    @section('og_image', $ogImage)
@endif

@section('content')
    <div class="relative z-0 mb-[-50px]">
        <!-- Background image container -->
        <div class="bg-cover bg-center z-0 md:h-[105vh] h-screen w-full overflow-x-hidden relative"
            style="background-image: url('{{ asset('storage/' . $article->thumbnail) }}');"
            aria-label="{{ $article->thumbnail_alt_text ? $article->thumbnail_alt_text : 'Default description if no alt text' }}">
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <div class="flex flex-col absolute bottom-25 md:bottom-40 px-5 md:px-20 ">
                <h1 class="uppercase ultraprint-font block text-4xl md:text-6xl rounded-2xl mb-2 text-white font-medium">
                    {{ $article->title }}
                </h1>
                <p class="text-sm text-left text-white opacity-60 mb-6">
                    Published on {{ $article->created_at->format('F j, Y') }}
                </p>
            </div>
        </div>

        <!-- Content section -->
        <div class="bg-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-10 md:px-15 z-10 relative">
            <!-- Back button -->
            <a href="{{ url('/explore/articles') }}" class="text-[#0353FF] text-lg">&lt; Back</a>

            <!-- Article content -->
            <div class="my-10 ">

                <!-- Article content -->
                <div class="article-content text-lg text-gray-800 leading-relaxed prose">
                    {!! $article->content !!}
                </div>

            </div>
        </div>

        <hr>
        {{-- Related Articles --}}
        <div class="bg-[#FFFFFF] py-20">
            <h1
                class="uppercase text-center ultraprint-font block text-4xl md:text-6xl rounded-2xl mb-2 text-[#0353FF] font-medium">
                Related Article
            </h1>
            <div class="flex justify-center">
                <div class="flex flex-wrap justify-center gap-4 my-10 max-w-screen-xl w-full">
                    @foreach ($articles as $article)
                        <x-card :campaign="$article->campaign_type" :title="$article->title" :image="asset('storage/' . $article->thumbnail)" :alt="$article->thumbnail_alt_text"  :link="route('explore.articles.show', $article->slug)" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <style>
        .article-content ul {
            list-style-type: disc;
            /* Ensure bullets are displayed */
            padding-left: 20px;
            /* Add space for bullets */
        }
    </style>
@endsection
