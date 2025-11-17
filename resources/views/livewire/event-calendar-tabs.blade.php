<div class=" bg-[#0353FF] text-white flex justify-center py-10 px-5">
    <div class=" w-full flex">

        {{-- LEFT LIST --}}
        <div class=" space-y-4">
            @foreach ($events as $event)
                <button type="button" wire:click="setSelectedEvent('{{ $event['id'] }}')"
                    class="block w-full text-left p-2  transition hover:opacity-100"
                    :class="{
                        'opacity-100': $wire.selectedEvent === '{{ $event['id'] }}',
                        'opacity-80': $wire.selectedEvent !== '{{ $event['id'] }}'
                    }">
                    <p class=" text-2xl ">{{ $event['title'] }}</p>
                    <p class=" text-[20px]">{{ $event['date'] }}</p>
                </button>
            @endforeach
        </div>
        {{-- VERTICAL LINE --}}
        <div class="mx-6 w-px bg-white/40"></div>

        {{-- RIGHT CONTENT --}}
        <div class="flex-1">
            <!-- Show loading state while Livewire is processing -->
            <div wire:loading>
                <p>Loading...</p> <!-- You can replace this with a spinner or custom loading component -->
            </div>

            <div wire:loading.remove>
                @foreach ($events as $event)
                    <!-- Only show the content for the selected event -->
                    @if ($selectedEvent === $event['id'])
                        <div class="space-y-3">
                            <h1 class="text-4xl font-extrabold">{{ $event['title'] }}</h1>
                            <p class="text-2xl leading-relaxed max-w-xl">{{ $event['description'] }}</p>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Optionally hide content while loading -->
            <div wire:loading.remove>
                <!-- This content will be hidden during loading -->
            </div>
        </div>
    </div>
</div>
