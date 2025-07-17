<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>

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
    <div id="app-content" class="hidden">
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
            // Fade in the logo image
            const logo = document.getElementById('logo');
            const splashScreen = document.getElementById('splash-screen');
            const appContent = document.getElementById('app-content');

            // Apply fade-in effect by changing opacity from 0 to 1
            logo.classList.remove('opacity-0');
            logo.classList.add('opacity-100');
            appContent.classList.remove('hidden');

            // After the logo fades in, hide the splash screen after a delay
            setTimeout(() => {
                logo.classList.remove('opacity-100');
                logo.classList.add('opacity-0');

                splashScreen.style.display = 'none';
            }, 2000);
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
