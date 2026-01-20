<div
    class="bg-[#0353FF] border rounded-2xl flex flex-col justify-between overflow-hidden shadow-lg w-3/4 md:w-[420px] h-auto">
    <div class="bg-[#0353FF] text-white content-top text-left p-4 md:p-7 min-h-[60px] md:min-h-[200px] ">
        <h5 class="uppercase text-[9px] md:text-[10px] mb-2 text-[#FEFC8B]">{{ $topTitle }}</h5>
        <div>
            <h2 class="text-[14px] md:text-2xl font-semibold ">{{ $title }}</h2>
            <h4 class=" text-[10px] md:text-[14px] font-normal mt-2 ">{{ $subtitle }}</h4>
        </div>
        @if ($itemNumber && $itemTitle)
            <div class=" mt-3 flex flex-col  text-[#FEFC8B]">
                @foreach ($itemNumber as $index => $number)
                    <div class="flex items-center">
                        <span class="text-4xl md:text-6xl font-bold">{{ $number }}</span>
                        <span class="text-[14px] md:text-2xl ml-2">{{ $itemTitle[$index] }}</span>
                    </div>

                    
                    <!-- Display content for each number and title -->
                    @if (isset($itemContent[$index]))
                        <ul class="list-square pl-8" style="list-style-type: square">
                            @foreach ($itemContent[$index] as $contentItem)
                                <li>
                                    @if (isset($contentItem['link']) && $contentItem['link'])
                                        <a class="underline" href="{{ $contentItem['link'] }}" target="_blank" rel="noopener noreferrer">
                                            {{ $contentItem['text'] }}
                                        </a>
                                    @else
                                        {{ $contentItem['text'] }}
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                @endforeach

            </div>
        @endif

    </div>
    <div class="relative pt-8 bg-[#0353FF]">
        <!-- Card Image -->
        @if ($image)
            <img src="{{ $image }}" alt="{{ $title }}"
                class="w-full h-[120px] md:h-[300px] object-cover" />
        @endif
        <!-- Button Overlay -->
        <a href="{{ $buttonLink ? $buttonLink : '#' }}" target="{{ $buttonLink ? '_blank' : '' }}"
            rel="noopener noreferrer"
            class="absolute bottom-4 left-4 inline-flex items-center gap-2 
               bg-[#FF5632] text-white
               px-2 py-1 md:px-3 md:py-1.5
               rounded-md hover:bg-[#e64c2a] transition
               text-[7px] md:text-[12px]">
            <span>{{ $buttonTitle }}</span>

            @if ($buttonLink)
                <!-- Arrow Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            @endif

        </a>
    </div>


</div>
