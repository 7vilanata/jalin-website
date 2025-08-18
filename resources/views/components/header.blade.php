 <header class=" z-20 relative mb-[-105px] bg-transparent text-white p-4">
     <div class="container mx-auto flex justify-between items-center">
         <!-- Logo -->
         <a href="{{ url('/') }}">
             <img class="w-[60px] md:w-[100px]" src="{{ asset('assets/img/logo-raw.webp') }}" alt="logo-raw">
         </a>


         <!-- Hamburger Button (Mobile) -->
         <button id="nav-toggle" class="md:hidden text-white focus:outline-none relative z-50">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
             </svg>
         </button>

         <!-- Desktop Nav -->
         <nav class="hidden md:flex uppercase space-x-4">
             <a href="/warkop-raw" class="px-2  ultraprint-font">Warkop RAWvolution</a>
             <a href="/raw-league" class="px-2  ultraprint-font">Youth RAW League</a>
             <a href="/raw-fest" class="px-2  ultraprint-font">Youth RAW Fest</a>



             <a href="/parents" class="px-2  ultraprint-font">Parents</a>
             <div class="relative group">
                 <a href="/explore" class="flex items-center gap-1 px-2 ultraprint-font">
                     Explore
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                         stroke="currentColor" class="w-5 h-5 transition-transform duration-300 group-hover:rotate-180">
                         <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                     </svg>
                 </a>

                 <!-- Dropdown Menu -->
                 <div
                     class="absolute left-0 mt-2 w-48 bg-white text-[#0353FF] rounded shadow-lg z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                     <a href="/explore/magazine"
                         class="block border-b-2 px-4 py-2 ultraprint-font hover:bg-gray-100">Magazine</a>
                     <a href="/explore/quiz"
                         class="block border-b-2 px-4 py-2 ultraprint-font  hover:bg-gray-100">Quiz</a>
                     <a href="/explore/article" class="block px-4 py-2 ultraprint-font  hover:bg-gray-100">Article</a>
                 </div>
             </div>
             <a href="/contact-us" class="px-2  ultraprint-font">Contact Us</a>
         </nav>

         <!-- Auth Button (Desktop) -->
         <div class="hidden md:flex gap-2 text-lg">
             <i>
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round"
                         d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                 </svg>
             </i>
             <a href="https://forms.gle/EdU7KEgaUUZam59F9" target="_blank"
                 class="font-medium ultraprint-font">REGISTER</a>
         </div>
     </div>

     <!-- Fullscreen Mobile Dropdown -->
     <div id="mobile-menu"
         class="fixed inset-0 bg-[#0353FF]/97  text-white hidden flex-col justify-center items-center z-50 md:hidden">
         <div class="flex justify-between">
             <a class="absolute top-4 left-4" href="{{ url('/') }}">
                 <img class="w-[60px] md:w-[100px]" src="{{ asset('assets/img/logo-raw.webp') }}" alt="logo-raw">
             </a>
             <button id="nav-close" class="absolute top-4 right-4 text-white text-3xl font-bold">&times;</button>

         </div>

         <nav class="flex flex-col space-y-6 text-xl uppercase text-center mr-5 mt-20 ">
             {{-- <a href="/" class="block  ultraprint-font">Home</a> --}}

             <a href="/warkop-raw" class="block  ultraprint-font">Warkop RAWvolution</a>
             <a href="/raw-league" class="block  ultraprint-font">Youth RAW League</a>
             <a href="/raw-fest" class="block  ultraprint-font">Youth RAW Fest</a>

             <a href="/parents" class="block  ultraprint-font">Parents</a>
             <div x-data="{ open: false }" class="relative text-right">

                 <!-- Row with link and icon separately -->
                 <div class="flex justify-center items-center gap-1">
                     <!-- Real link -->
                     <a href="/explore" class="ultraprint-font">Explore</a>

                     <!-- Arrow button triggers submenu -->
                     <button @click="open = !open" type="button" class="focus:outline-none">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                             stroke="currentColor" :class="{ 'rotate-180': open }"
                             class="w-5 h-5 transition-transform duration-300">
                             <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                         </svg>
                     </button>
                 </div>

                 <!-- Dropdown Submenu -->
                 <div x-show="open" x-transition @click.away="open = false"
                     class="mt-2 space-y-2 text-sm text-center flex flex-col items-center">
                     <a href="/explore/magazine"
                         class="block  px-4 py-2 ultraprint-font hover:bg-gray-100">Magazine</a>
                     <a href="/explore/quiz"
                         class="block px-4 py-2 ultraprint-font  hover:bg-gray-100">Quiz</a>
                     <a href="/explore/article" class="block px-4 py-2 ultraprint-font  hover:bg-gray-100">Article</a>
                 </div>
             </div>
             <a href="/contact-us" class="block  ultraprint-font">Contact Us</a>
             <a href="https://forms.gle/EdU7KEgaUUZam59F9" target="_blank" class="block ultraprint-font">REGISTER</a>
         </nav>
     </div>
 </header>
 <script>
     const toggleBtn = document.getElementById('nav-toggle');
     const closeBtn = document.getElementById('nav-close');
     const mobileMenu = document.getElementById('mobile-menu');

     toggleBtn.addEventListener('click', () => {
         mobileMenu.classList.remove('hidden');
     });

     closeBtn.addEventListener('click', () => {
         mobileMenu.classList.add('hidden');
     });
 </script>
