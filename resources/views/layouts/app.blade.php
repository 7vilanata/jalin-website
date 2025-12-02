<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Generasi RAW - #GenerasiGaButuhValidasi')</title>
    <meta name="description" content="@yield('meta_description', '#GenerasiGaButuhValidasi')">
    <meta name="keywords" content="@yield('meta_keywords', '#GenerasiGaButuhValidasi')">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- Open Graph for Social Media -->
    <meta property="og:locale" content="{{ app()->getLocale() . '_' . strtoupper(app()->getLocale()) }}">
    <meta property="og:title" content="@yield('og_title', 'Generasi RAW - #GenerasiGaButuhValidasi')">
    <meta property="og:type" content="article">
    <meta property="og:description" content="@yield('og_description', '')">
    <meta property="og:image" content="@yield('og_image', '')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image:alt" content="@yield('og_image', '')">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="article:publisher" content="">
    <meta property="article:author" content="@yield('author', 'admin')">
    <meta property="article:published_time" content="@yield('published_at', '')">
    <meta property="article:modified_time" content="@yield('published_at', '')">

    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:title" content="@yield('og_title', 'Generasi RAW - #GenerasiGaButuhValidasi')">
    <meta name="twitter:description" content="@yield('og_description', '')">
    <meta name="twitter:image" content="@yield('og_image', '')">
    <meta name="twitter:image:alt" content="">

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VNYCS1NRHH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-VNYCS1NRHH');
    </script>
    <!-- Livewire Styles -->
    @livewireStyles

    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100">

    <div id="splash-screen"
        class="fixed inset-0 flex items-center justify-center bg-gradient-to-br via-[#FF7E5F] to-[#FEB47B] from-[#6A82FB] bg-opacity-50 z-50 ">
        <div class="text-white text-3xl font-semibold">
            <img id="logo" class="w-[200px] h-auto opacity-0 transition-opacity duration-1000 ease-in-out "
                src="{{ asset('assets/img/logo-raw.webp') }}" alt="logo-raw">
        </div>
    </div>
    <div id="app-content">
        @if (!isset($hideHeader) || !$hideHeader)
            @include('components.header')
        @endif

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
        document.addEventListener("DOMContentLoaded", function() {
            const lazyBackgrounds = document.querySelectorAll(".lazy-background");

            // Set the initial background image as the placeholder

            lazyBackgrounds.forEach(background => {
                background.style.backgroundImage = `url('{{ asset('assets/gif/mesh-gradient.gif') }}')`;
            });

            // Create the IntersectionObserver
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Create an Image object to load the GIF
                        const img = new Image();
                        img.src = `{{ asset('assets/gif/mesh-gradient.gif') }}`;

                        // When the GIF is loaded, replace the background image
                        img.onload = () => {
                            entry.target.style.backgroundImage =
                                `url('{{ asset('assets/gif/mesh-gradient.gif') }}')`;
                        };

                        // Stop observing once the background is set
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            }); // 0.1 means the element is 10% in the viewport

            // Observe each element with the 'lazy-background' class
            lazyBackgrounds.forEach(element => {
                observer.observe(element);
            });
        });

        const logo = document.getElementById('logo');
        const splash = document.getElementById('splash-screen');

        logo.classList.remove('opacity-0');
        logo.classList.add('opacity-100');

        // Fade out splash after delay
        setTimeout(() => {
            splash.classList.add('opacity-0');
            splash.classList.add('pointer-events-none'); // Avoid blocking interaction
        }, 800);

        // Optional: Remove splash from DOM after transition
        setTimeout(() => {
            splash.remove();
        }, 1000);
    </script>


    <!-- Livewire Scripts -->
    @livewireScripts
</body>

</html>
