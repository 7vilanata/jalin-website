<!-- resources/views/components/card.blade.php -->

<div class="bg-white border rounded-lg overflow-hidden shadow-lg w-[308px] h-[382px] md:h-[472px]">

    <!-- Card Image -->
    @if ($image)
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-[70%] object-cover ">
    @endif

    <!-- Card Title -->
    <div class="bg-[#0353FF] text-white content-top text-left p-7  h-[30%]">

        <span class="uppercase text-[12px]">{{ $campaign }}</span>

        @if ($link)
            <a href="{{ $link }}" class=" hover:underline block">
                <div class="flex justify-between items-end">

                    <h2 class="text-xl font-semibold ">{{ Str::words($title, 6, '...') }}</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#FEFC8B" viewBox="0 0 24 24" stroke-width="4"
                        stroke="#FEFC8B" class="min-w-[20px] h-[20px] mb-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                    </svg>

                </div>

            </a>
        @endif
    </div>
</div>
