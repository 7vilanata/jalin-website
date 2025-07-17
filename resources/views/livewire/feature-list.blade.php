<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($features as $feature)
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold">{{ $feature['title'] }}</h3>
            <p class="text-gray-700 mt-2">{{ $feature['description'] }}</p>
        </div>
    @endforeach
</div>
