@extends('layouts.app')

@section('content')
    <div class="relative z-0 mb-[-50px] ">
        <div class="lazy-background z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative">
            <div class="flex h-full w-full mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/boy-warkop.webp') }}"
                    alt="boy-warkop">
                <img class="h-auto w-full self-end z-0 block md:hidden" src="{{ asset('assets/img/boy-warkop-mobile.webp') }}"
                    alt="boy-warkop-mobile">
                <a href="https://student.generasiraw.org/login" class="inline-block ">
                    <button
                        class="hover:scale-110 ease-in-out text-[16px] md:text-4xl flex items-center bg-[#0353FF] py-1.5 px-8 text-white rounded-3xl absolute z-10 bottom-1/8 left-1/2 transform -translate-x-1/2 transition-all duration-300">
                        <span class="ultraprint-font">Gas Tanpa Basa-Basi!</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="size-4 md:size-8 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
        <div class=" bg-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-3 md:px-15 z-10 relative">
            <a href="{{ route('warkop') }}" class="text-[#0353FF]  text-sm md:text-lg">
                < Back </a>

                    <div class="my-10 text-center">

                        <div class="flex flex-wrap gap-2  mb-4">
                            @foreach ($location_list as $key => $location)
                                <button
                                    class="flex-1 text-[12px] md:text-[18px] location-button px-4 py-2 rounded-3xl border-[#FF5632] border-2 bg-none 
                                    text-[#FF5632] hover:text-white  hover:bg-[#FF5632]"
                                    data-location="{{ $key }}">
                                    {{ $location }}
                                </button>
                            @endforeach
                        </div>
                        <div class="flex justify-center">
                            <div id="schedule-list"
                                class="flex flex-wrap justify-center lg:justify-start gap-1 md:gap-4 my-10 max-w-screen-xl w-full">
                                @foreach ($schedules as $schedule)
                                    @if ($schedule->slug)
                                        <x-schedule-card :title="$schedule->title" :subtitle="$schedule->subtitle" :slug="route('warkop.schedule.show', $schedule->slug)"
                                            :typehub="$schedule->type_hub" :location="$schedule->location" :streetloc="$schedule->street_loc" :image="asset('storage/' . $schedule->thumbnail)"
                                            :scheduledate="$schedule->schedule_date" :starttime="$schedule->start_time" />
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div id="pagination-container" class="mt-4">
                            {{ $schedules->appends(['location' => request('location')])->links() }}
                            <!-- Ensure location filter is preserved in pagination links -->
                        </div>
                    </div>
        </div>
    </div>
    @if (Route::is('warkop.schedule.index'))
        <script>
            document.querySelectorAll('.location-button').forEach(button => {
                const list_loc = button.getAttribute('data-location');

                if (list_loc === 'all') {
                    button.classList.add('text-white', 'bg-[#FF5632]')
                }

                button.addEventListener('click', function() {
                    const location = this.getAttribute('data-location');
                    filterSchedules(location);

                    document.querySelectorAll('.location-button').forEach(btn => {
                        btn.classList.remove('text-white',
                            'bg-[#FF5632]'); // Reset all buttons to default background color
                        btn.classList.add(
                            'text-[#FF5632]'); // Reset all buttons to default background color
                    });

                    // Set the background color of the clicked button to orange
                    this.classList.add('text-white', 'bg-[#FF5632]')


                });
            });

            function filterSchedules(location) {
                const scheduleList = document.getElementById('schedule-list');
                const paginationContainer = document.getElementById(
                'pagination-container'); // Container for pagination controls

                // Show a loading spinner while waiting for data
                scheduleList.innerHTML = '<div class="spinner"></div>'; // Show spinner
                paginationContainer.innerHTML = ''; // Clear pagination controls

                fetch(`/schedules/filter?location=${location}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Failed to fetch schedules');
                        }
                        return response.json();
                    })
                    .then(data => {
                        scheduleList.innerHTML = ''; // Clear spinner

                        if (data.html) {
                            // Insert the schedule cards returned from the server
                            scheduleList.innerHTML = data.html;
                        } else {
                            scheduleList.innerHTML = "<div>No Schedule Found</div>"; // If no data
                        }

                        if (data.pagination) {
                            // Insert the pagination links returned from the server
                            paginationContainer.innerHTML = data.pagination;
                        }
                    })
                    .catch(error => {
                        console.error('Error filtering schedules:', error);
                        scheduleList.innerHTML =
                        "<div>Error loading schedules. Please try again later.</div>"; // Error message
                    });
            }
        </script>
    @endif
@endsection
