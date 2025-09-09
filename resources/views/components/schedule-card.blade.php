<!-- resources/views/components/card.blade.php -->

<div
    class="bg-white border rounded-lg flex flex-col justify-between overflow-hidden shadow-lg w-[170px] md:w-[308px] h-auto">
    <div class="bg-[#0353FF] text-white content-top text-left p-4 md:p-7  ">
        <h5 class="uppercase text-[9px] md:text-[10px] mb-2 text-[#FEFC8B]">{{ $type_hub }}</h5>
        @if ($slug)
            <a href="{{ $slug }}" class=" hover:underline block">
                <h2 class="text-[14px] md:text-2xl font-semibold ">{{ Str::words($title, 6, '...') }}</h2>
                <h4 class=" text-[10px] md:text-[18px] font-normal ">{{ Str::words($subtitle, 6, '...') }}</h4>
            </a>
        @endif
        <div class=" mt-3 flex text-[#FEFC8B]">
            <span class="text-4xl md:text-6xl font-bold">{{ $date_parts[2] }}</span>
            <div class="flex flex-col">
                <span class="text-[13px] md:text-2xl ml-2">{{ $month_name }}</span>
                <span class="text-[13px] md:text-2xl ml-2">{{ $date_parts[0] }}</span>
            </div>

        </div>
    </div>
    <!-- Card Image -->
    @if ($image)
        <img src="{{ $image }}" alt="{{ $title }}"
            class=" flex-1 w-full h-[120px] md:h-[200px]  object-cover ">
    @endif
    <div class="bg-[#FF5632] text-white content-end text-left p-1 md:p-2 ">
        <div class="text-left justify-between flex gap-4 md:gap-10 text-[7px] md:text-[10px]">
            <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
                <span>{{ $street_loc }}</span></span>
            <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <span>{{ \Carbon\Carbon::parse($start_time)->format('d F Y') }}</span>
            </span>
        </div>
    </div>

    <!-- Card Title -->

</div>
