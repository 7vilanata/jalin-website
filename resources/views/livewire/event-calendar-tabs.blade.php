<div class="bg-[#0353FF] text-white flex justify-center py-10 px-5">
    <div class="w-full flex flex-col md:flex-row">

        {{-- LEFT LIST --}}
        <div class="space-y-4 w-full md:w-1/3">
            @foreach ($events as $event)
                <button type="button" wire:click="setSelectedEvent('{{ $event['id'] }}')"
                    class="block w-full text-left p-2 transition hover:opacity-100"
                    :class="{
                        'opacity-100': $wire.selectedEvent === '{{ $event['id'] }}',
                        'opacity-60': $wire.selectedEvent !== '{{ $event['id'] }}'
                    }">
                    <p class="text-xl md:text-2xl">{{ $event['title'] }}</p>
                    <p class="text-base md:text-[20px]">{{ $event['date'] }}</p>
                </button>
            @endforeach
        </div>

        {{-- VERTICAL LINE (Hide on mobile) --}}
        <div class="mx-6 w-px bg-white/40 hidden md:block"></div>

        {{-- RIGHT CONTENT --}}
        <div class="flex-1 w-full md:w-2/3 mt-6 md:mt-0">
            <!-- Show loading state while Livewire is processing -->
            <div wire:loading>
                <p>Loading...</p> <!-- You can replace this with a spinner or custom loading component -->
            </div>

            <div wire:loading.remove>
                @foreach ($events as $event)
                    <!-- Only show the content for the selected event -->
                    @if ($selectedEvent === $event['id'])
                        <div class="space-y-3">
                            <h1 class="text-3xl md:text-4xl font-extrabold">{{ $event['title'] }}</h1>
                            <p class="text-lg md:text-2xl leading-relaxed max-w-xl">{{ $event['description'] }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    </div>
</div>
