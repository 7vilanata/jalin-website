@extends('layouts.app')
@section('content')
    <div class="relative">
        <div class="relative">
            <div class="lazy-background z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative">
                <div class="flex h-full w-full  mx-auto justify-center items-center">
                    <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/boy-rawleague.webp') }}"
                        alt="boy-warkop">
                    <img class="h-auto w-full self-end z-0 block md:hidden"
                        src="{{ asset('assets/img/boy-rawleague-mobile.webp') }}" alt="boy-warkop-mobile">
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
            <section
                class="bg-[#FFFFFF] text-center rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-3 sm:px-10 lg:px-50 z-10 relative">
                <h1
                    class=" py-3 ultraprint-font inline-block p-3 text-4xl md:text-5xl rounded-2xl mb-2 text-[#0353FF] font-medium">
                    BAGAN RAW LEAGUE</h1>

                <!-- Tournament Buttons -->
                <div id="bagan-buttons" class="transition-opacity duration-300 ease-in-out mb-8">
                    @foreach ($tournaments as $tournament)
                        <button type="button" value="{{ $tournament->slug }}"
                            class="bagan-btn font-bold text-[18px] text-white border-2 border-[#FF5632] rounded-full px-5 py-2.5 text-center me-2 mb-2 bg-transparent"
                            onclick="showTournament('{{ $tournament->slug }}')">
                            {{ $tournament->name }}
                        </button>
                    @endforeach
                </div>

                <!-- Tournament Details (Image & Teams List) -->
                <div id="tournament-details" class="tournament-container">
                    @foreach ($tournaments as $tournament)
                        <div id="tournament-{{ $tournament->slug }}" class="tournament hidden">
                            <h2>{{ $tournament->name }}</h2>
                            <img src="{{ asset('storage/' . $tournament->chart_image) }}"
                                alt="{{ $tournament->name }} bracket" class="tournament-chart">

                            <div class="team-list mt-20">
                                <h3 class="text-2xl font-bold mb-4">Teams:</h3>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                    <!-- Left column: First 10 teams -->
                                    <div class="team-column overflow-y-auto max-h-[calc(10*3rem)]">
                                        @foreach ($tournament->teams->take(10) as $team)
                                            <!-- First 4 teams for the first column -->
                                            <div class="team-item flex items-center text-2xl text-[#0353FF] gap-5 my-3">
                                                <span
                                                    class="font-[600]">{{ $team->position ? $team->position . '. ' : '' }}</span>

                                                <!-- Display Team Logo -->
                                                @if ($team->logo_image)
                                                    <img src="{{ asset('storage/' . $team->logo_image) }}"
                                                        alt="{{ $team->name }} logo" class="w-12">
                                                @else
                                                    <img src="{{ asset('assets/img/rawleague/example-logo1.png') }}"
                                                        alt="{{ $team->name }} logo" class="w-12">
                                                @endif

                                                <span class="font-[600]">{{ $team->name }}</span>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Middle column: Next 3 teams -->
                                    <div class="team-column overflow-y-auto max-h-[calc(10*3rem)]">
                                        @foreach ($tournament->teams->skip(10)->take(10) as $team)
                                            <!-- Next 3 teams -->
                                            <div class="team-item flex items-center text-2xl text-[#0353FF] gap-5 my-3">
                                                <span
                                                    class="font-[600]">{{ $team->position ? $team->position . '. ' : '' }}</span>

                                                <!-- Display Team Logo -->
                                                @if ($team->logo_image)
                                                    <img src="{{ asset('storage/' . $team->logo_image) }}"
                                                        alt="{{ $team->name }} logo" class="w-12">
                                                @else
                                                    <img src="{{ asset('assets/img/rawleague/example-logo1.png') }}"
                                                        alt="{{ $team->name }} logo" class="w-12">
                                                @endif

                                                <span class="font-[600]">{{ $team->name }}</span>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Right column: Remaining teams -->
                                    <div class="team-column overflow-y-auto max-h-[calc(100vh-10*3rem)]">
                                        @foreach ($tournament->teams->skip(20) as $team)
                                            <!-- Remaining teams -->
                                            <div class="team-item flex items-center text-2xl text-[#0353FF] gap-5 my-3">
                                                <span
                                                    class="font-[600]">{{ $team->position ? $team->position . '. ' : '' }}</span>

                                                <!-- Display Team Logo -->
                                                @if ($team->logo_image)
                                                    <img src="{{ asset('storage/' . $team->logo_image) }}"
                                                        alt="{{ $team->name }} logo" class="w-12">
                                                @else
                                                    <img src="{{ asset('assets/img/rawleague/example-logo1.png') }}"
                                                        alt="{{ $team->name }} logo" class="w-12">
                                                @endif

                                                <span class="font-[600]">{{ $team->name }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>


                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
    @if (Route::is('rawleague.leaderboard'))
        <script>
            // Initialize the first tournament to show by default
            const tournaments = @json($tournaments->pluck('slug')); // Get all tournament slugs
            let selectedTournament = tournaments[0]; // Default to the first tournament

            function showTournament(slug) {
                // Hide all tournaments
                document.querySelectorAll('.tournament').forEach(tournament => {
                    tournament.classList.add('hidden');
                });

                // Show the selected tournament
                const selectedTournamentElement = document.getElementById('tournament-' + slug);
                if (selectedTournamentElement) {
                    selectedTournamentElement.classList.remove('hidden');
                }

                // Highlight the active button
                const baganBtn = document.querySelectorAll('.bagan-btn');
                baganBtn.forEach(btn => {
                    if (btn.value === slug) {
                        btn.classList.remove('bg-transparent');
                        btn.classList.add('bg-[#FF5632]');
                        btn.classList.add('text-white');
                        btn.classList.remove('text-[#FF5632]');
                    } else {
                        btn.classList.add('bg-transparent');
                        btn.classList.remove('bg-[#FF5632]');
                        btn.classList.remove('text-white');
                        btn.classList.add('text-[#FF5632]');

                    }
                });
            }

            // Load the first tournament by default
            showTournament(selectedTournament);
        </script>
    @endif
@endsection
