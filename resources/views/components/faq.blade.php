<div>
    <div class="mt-30">
        <h1 style="font-weight: 400"
            class="uppercase ultraprint-font p-3 text-[22px] text-center md:text-6xl rounded-2xl mb-2 text-[#0353FF] font-medium">
            Yang biasa ditanyain (FAQ)</h1>
    </div>

    <!-- Accordion Item 1 -->
    <div class="bg-[#FEFC8B] px-5 rounded-2xl">
        <button onclick="toggleAccordion(1)" class="w-full flex justify-between items-center py-5 text-slate-800">
            <span class="text-[14px] md:text-2xl text-[#0353FF] font-semibold text-left">Apa itu Generasi RAW?</span>
            <span id="icon-1" class="text-slate-800 transition-transform duration-300 transform rotate-0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 md:w-6 md:h-6">
                    <path
                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                </svg>
            </span>
        </button>
        <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="pb-5 text-[14px] md:text-[20px] ">
                Sebuah movement remaja cowok yang ngajak kita berani jadi diri sendiri dan bikin pilihan yang berarti
                karena kami #GenerasiGaButuhValidasi
            </div>
        </div>
    </div>

    <!-- Accordion Item 2 -->
    <div class="bg-[#FEFC8B] px-5 rounded-2xl mt-3">
        <button onclick="toggleAccordion(2)" class="w-full flex justify-between items-center py-5 text-slate-800">
            <span class="text-[14px] md:text-2xl text-[#0353FF] font-semibold text-left">Untuk siapa program ini?</span>
            <span id="icon-2" class="text-slate-800 transition-transform duration-300 transform rotate-0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 md:w-6 md:h-6">
                    <path
                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                </svg>
            </span>
        </button>
        <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="pb-5 text-[14px] md:text-[20px] ">
                Buat remaja cowok 12–19 tahun. Masa labil tapi juga masa paling powerful buat kenal diri dan nentuin
                arah hidup.
            </div>
        </div>
    </div>

    <!-- Accordion Item 3 -->
    <div class="bg-[#FEFC8B] px-5 rounded-2xl mt-3">
        <button onclick="toggleAccordion(3)" class="w-full flex justify-between items-center py-5 text-slate-800">
            <span class="text-[14px] md:text-2xl text-[#0353FF] font-semibold text-left">Siapa itu yang termasuk “Generasi RAW”?</span>
            <span id="icon-3" class="text-slate-800 transition-transform duration-300 transform rotate-0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 md:w-6 md:h-6">
                    <path
                        d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                </svg>
            </span>
        </button>
        <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="pb-5 text-[14px] md:text-[20px] ">
                Kami, remaja cowok yang berani bilang “nggak” ke hal negatif, dan tetap jalanin hidup dengan cara kami
                sendiri. Kami bikin karya, dukung sesama, dan saling semangatin buat tetap jadi real dan berani.
            </div>
        </div>
    </div>

    <script>
        function toggleAccordion(index) {
            const content = document.getElementById(`content-${index}`);
            const icon = document.getElementById(`icon-${index}`);

            // Toggle the content's max-height for smooth opening and closing
            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0';
                icon.classList.remove('rotate-45'); // Remove the rotation when closing
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.classList.add('rotate-45'); // Apply the rotation when opening
            }
        }
    </script>



</div>
