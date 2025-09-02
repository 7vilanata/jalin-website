<div>
    @if ($link)
        <a href="{{ $link }}"
            class="bg-white border rounded-lg overflow-hidden shadow-2xl hover:underline block w-[308px] h-[440px]">
            <!-- Card Image -->
            @if ($image)
                <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-stretch ">
            @endif
        </a>
    @endif

</div>
