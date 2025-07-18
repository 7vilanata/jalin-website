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
             <a href="/activities" class="px-2  ultraprint-font">Activities</a>
             <a href="/about" class="px-2  ultraprint-font">About</a>
             <a href="/blog" class="px-2  ultraprint-font">Blog</a>
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
             <a href="https://forms.gle/EdU7KEgaUUZam59F9" target="_blank" class="font-medium ultraprint-font">REGISTER</a>
         </div>
     </div>

     <!-- Fullscreen Mobile Dropdown -->
     <div id="mobile-menu"
         class="fixed inset-0 bg-[#FF5632]/90  text-white hidden flex-col justify-center items-center z-50 md:hidden">
         <button id="nav-close" class="absolute top-4 right-4 text-white text-3xl font-bold">&times;</button>

         <nav class="flex flex-col space-y-6 text-xl uppercase text-right mr-5 mt-15 ">
             <a href="/" class="block  ultraprint-font">Home</a>
             <a href="/activities" class="block  ultraprint-font">Activities</a>
             <a href="/about" class="block  ultraprint-font">About</a>
             <a href="/blog" class="block  ultraprint-font">Blog</a>
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
