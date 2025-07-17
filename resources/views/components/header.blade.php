 <header class=" z-20 relative mb-[-105px] bg-transparent text-white p-4">
     <div class="container mx-auto flex justify-between items-center">
         <!-- Logo -->
         <a href="{{ url('/') }}">
             <img class="w-[100px]" src="{{ asset('assets/img/logo-raw.webp') }}" alt="logo-raw">
         </a>


         <!-- Hamburger Button (Mobile) -->
         <button id="nav-toggle" class="md:hidden text-white focus:outline-none relative z-50">
             <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
             </svg>
         </button>

         <!-- Desktop Nav -->
         <nav class="hidden md:flex uppercase space-x-4">
             <a href="/activities" class="px-2">Activities</a>
             <a href="/about" class="px-2">About</a>
             <a href="/blog" class="px-2">Blog</a>
             <a href="/contact-us" class="px-2">Contact Us</a>
         </nav>

         <!-- Auth Button (Desktop) -->
         <div class="hidden md:flex gap-2">
             <i>
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round"
                         d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                 </svg>
             </i>
             <a href="https://forms.gle/EdU7KEgaUUZam59F9" target="_blank" class="font-semibold">SIGN UP</a>
         </div>
     </div>

     <!-- Fullscreen Mobile Dropdown -->
     <div id="mobile-menu"
         class="fixed inset-0 bg-[#FF5632]/85  text-white hidden flex-col justify-center items-center z-50 md:hidden">
         <button id="nav-close" class="absolute top-4 right-4 text-white text-3xl font-bold">&times;</button>

         <nav class="flex flex-col space-y-6 text-xl uppercase text-left ml-5 mt-10">
             <a href="/activities" class="block">Activities</a>
             <a href="/about" class="block">About</a>
             <a href="/blog" class="block">Blog</a>
             <a href="/contact-us" class="block">Contact Us</a>
             <a href="https://forms.gle/EdU7KEgaUUZam59F9" target="_blank" class="block font-semibold">SIGN UP</a>
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
