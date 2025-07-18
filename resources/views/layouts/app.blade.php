<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Generasi Raw - #GenerasiGaButuhValidasi')</title>
    <meta name="description" content="@yield('meta_description', '#GenerasiGaButuhValidasi')">

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])



</head>

<body class="bg-gray-100">

    <div id="splash-screen"
        class="fixed inset-0 flex items-center justify-center bg-gradient-to-br via-[#FF7E5F] to-[#FEB47B] from-[#6A82FB] bg-opacity-50 z-50">
        <div class="text-white text-3xl font-semibold">
            <img id="logo" class="w-[200px] h-auto opacity-0 transition-opacity duration-1000 ease-in-out "
                src="{{ asset('assets/img/logo-raw.webp') }}" alt="logo-raw">
        </div>
    </div>
    <div id="app-content">
        @include('components.header')


        <!-- Main Content Section -->
        <div class="mx-auto">
            @yield('content')
        </div>

        <!-- Footer Section -->
        @if (!isset($hideFooter) || !$hideFooter)
            @include('components.footer')
        @endif
    </div>

    <script>
        // Wait for the page to fully load
        window.onload = () => {
            const logo = document.getElementById('logo');
            const splash = document.getElementById('splash-screen');

            logo.classList.remove('opacity-0');
            logo.classList.add('opacity-100');

            // Fade out splash after delay
            setTimeout(() => {
                splash.classList.add('opacity-0');
                splash.classList.add('pointer-events-none'); // Avoid blocking interaction
            }, 1500);

            // Optional: Remove splash from DOM after transition
            setTimeout(() => {
                splash.remove();
            }, 2500);
        };


        // Optionally: Hide splash when switching tabs (visibilitychange event)
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                document.getElementById('splash-screen').style.display = 'block';
            } else {
                document.getElementById('splash-screen').style.display = 'none';
            }
        });
    </script>
    <!-- Livewire Scripts -->
    @livewireScripts
</body>

</html>
