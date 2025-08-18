<!-- resources/views/components/card.blade.php -->

<div class="bg-white border rounded-lg shadow-lg w-96 h-auto">

    <!-- Card Image -->
    @if ($image)
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-48 object-cover rounded-md mb-4">
    @endif

    <!-- Card Title -->
    <div class="bg-white border rounded-lg shadow-lg">

        <!-- Link wrapped around the text -->
        @if ($link)
            <a href="{{ $link }}" class="text-blue-500 hover:underline block">
                <h2 class="text-xl font-semibold text-gray-800 ">{{ $title }}</h2>

            </a>
        @endif
    </div>
</div>
