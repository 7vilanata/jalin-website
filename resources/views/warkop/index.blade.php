@extends('layouts.app')

@section('content')
    <div class="relative">
        <div class=" z-0 md:h-[105vh] h-screen w-full overflow-x-hidden bg-cover relative"
            style="background-image: url('{{ asset('assets/img/atf-bg.webp') }}');">
            <div class="flex h-full w-full  mx-auto justify-center items-center">
                <img class="h-auto w-4/5 self-end z-0 hidden md:block" src="{{ asset('assets/img/boy-warkop.webp') }}"
                    alt="boy-warkop">
                <img class="h-auto w-full self-end z-0 block md:hidden" src="{{ asset('assets/img/boy-warkop-mobile.webp') }}"
                    alt="boy-warkop-mobile">
            </div>
        </div>
        <div
            class="bg-[#FFFFFF] rounded-t-[50px] md:rounded-t-[100px] py-20 mt-[-80px] px-3 sm:px-10 lg:px-50 z-10 relative">
            <h1 style="font-weight: 400"
                class="ultraprint-font bg-[#FF5632] inline-block p-3 text-[22px] md:text-5xl rounded-2xl mb-2 text-[#FFFFFF] font-medium">
                ABOUT WARKOP RAWVOLUTION</h1>
            <p class="text-[#0353FF] my-3 text-[14px] md:text-2xl"> <b>Warkop RAWvolution</b> itu lebih dari sekadar tempat
                nongkrong.
                <br>
                <br>
                Ini tentang gimana kita ngebikin tempat ngopi jadi ruang seru dan bermakna. Bareng gerakan Generasi RAW,
                kita punya ruang buat bebas jadi diri sendiri, berekspresi, dan berkembang bareng teman-teman yang suportif
                dan satu vibe.
                <br>
                <br>
                Di sini, kita nongkrong bisa sambil ngumpulin poin, ikutan tantangan, main game, tampil, sampai bikin karya
                pertama lo sendiri. Tempat ini jadi wadah kita buat tumbuh bareng sambil tetap seru.
            </p>
            <h1 class="text-center font-bold text-[#0353FF] text-[14px] md:text-2xl mt-10 mb-5">
                Ada dua jenis warkop disini:
            </h1>
            <div class="flex flex-wrap flex-row justify-center gap-3 mb-10">
                <div class=" w-full md:w-5/12 pb-6 bg-white border  rounded-2xl shadow-xl dark:bg-gray-800 ">
                    <h1 class="font-bold bg-[#FF5632] p-3 text-2xl text-center rounded-2xl text-[#FFFFFF]">
                        RAWplace</h1>
                    <p class="px-5 text-[#0353FF] my-3 text-center text-[14px] md:text-[20px]">
                        Ruang yang dibuat untuk menampung aktivitas besar seperti workshop, performance, showcase, dan event
                        komunitas. Tempat ini jadi pusat energi kreatif yang dinamis dan ekspresif, ngasih space buat segala
                        hal.
                    </p>
                </div>
                <div class="  w-full md:w-5/12 pb-6 bg-white border rounded-2xl shadow-xl dark:bg-gray-800 ">
                    <h1 class="font-bold bg-[#FF5632] p-3 text-2xl text-center rounded-2xl text-[#FFFFFF]">
                        RAWkop</h1>
                    <p class="px-5 text-[#0353FF] my-3 text-center text-[14px] md:text-[20px]">
                        Ruang kecil yang dekat, hangat, dan low-key. Formatnya kayak kantung nongkrong tempat ngobrol, tuker
                        ide mentah, atau recharge energi. Gak pretensius, cocok buat interaksi yang lebih santai.
                    </p>
                </div>
            </div>
            <p class="text-[#0353FF] text-center my-3 text-[14px] md:text-2xl">
                <b>Ini ruang bareng. Ini gerakan bareng.</b> <br>
                Yuk ikuti perjalanannya, gabung komunitasnya, dan rasain langsung serunya!
                <br><br>
                <b>Let’s hang, grow, and be part of Generasi RAW!</b>
            </p>

            <div class="my-30 text-center">
                <h1
                    class="ultraprint-font inline-block p-3 text-4xl md:text-5xl  rounded-2xl mb-2 text-[#0353FF] font-medium">
                    UPCOMING SCHEDULE</h1>

                <div class="flex justify-center p-0 w-full">
                    <div class="flex flex-wrap justify-center gap-1 md:gap-4 my-10 md:max-w-screen-xl w-full">
                        @foreach ($schedules as $schedule)
                            <x-schedule-card :title="$schedule->title" :subtitle="$schedule->subtitle" :slug="route('warkop.schedule.show', $schedule->slug)" :typehub="$schedule->type_hub"
                                :location="$schedule->location" :streetloc="$schedule->street_loc" :image="asset('storage/' . $schedule->thumbnail)" :scheduledate="$schedule->schedule_date" :starttime="$schedule->start_time" />
                        @endforeach
                    </div>
                </div>
                <a href="{{ url('/warkop-raw/schedule') }}">
                    <button type="button"
                        class="btn btn-primary rounded-2xl cursor-pointer text-[18px] bg-[#0353FF] text-white inline-block px-4 py-2">
                        See More
                    </button>
                </a>
            </div>
        </div>
        <div class="overflow-hidden bg-yellow-300 whitespace-nowrap">
            <div class="marquee-wrapper">
                <div class="flex">
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                </div>
                <div class="flex">
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                </div>
                <div class="flex">
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">#GenerasiGaButuhValidasi</span>
                </div>
            </div>
        </div>
        <div class="bg-blue-600 text-white py-20 md:py-50 px-8 relative">
            <div class="flex flex-col justify-center">
                <div class="flex justify-center items-center space-x-8 lg:mx-20 relative z-0">
                    <div class="my-30 text-center">
                        <h1
                            class="ultraprint-font inline-block uppercase p-3 text-4xl md:text-5xl  rounded-2xl mb-2 text-white font-medium">
                            WARKOP LOCATIONS</h1>
                        <div id="location-buttons" class="transition-opacity duration-300 ease-in-out opacity-0" hidden>
                            <button type="button" value="RAWplace"
                                class="location-btn font-bold text-[18px] text-white border-2 border-[#FF5632]  rounded-full px-5 py-2.5 text-center me-2 mb-2 bg-[#FF5632]">
                                RAWplace
                            </button>
                            <button type="button" value="RAWkop"
                                class="location-btn text-white text-[18px] border-2 border-[#FF5632]  rounded-full font-bold  px-5 py-2.5 text-center me-2 mb-2 bg-transparent">
                                RAWkop
                            </button>
                        </div>
                        <div
                            class="flex flex-col md:flex-row gap-10 md:gap-0 justify-center items-center md:justify-between mt-30">
                            <div class="container mx-auto w-full md:w-1/2  relative">
                                <img id="warkop_map" src="{{ asset('assets/img/warkop_place/all-location.webp') }}"
                                    alt="Locations" usemap="#map_locations"
                                    class="block w-full mx-auto transition-opacity duration-300 ease-in-out opacity-100">

                                <!-- dark overlay that aligns perfectly to the image box -->
                                <div id="map-overlay"
                                    class="absolute inset-0 w-full h-full z-10 opacity-100 pointer-events-none">
                                </div>

                                <!-- clickable layer for hotspots/dots -->
                                <div id="overlay_select" class="absolute inset-0 w-full h-full">
                                    <!-- Jakarta Barat -->
                                    <div class="cursor-pointer"
                                        style="position: absolute; left: 3%; width: 40%; height: 40%;"
                                        onclick="updateMapImage('Jakarta Barat')"></div>

                                    <!-- Jakarta Pusat -->
                                    <div class="cursor-pointer"
                                        style="position: absolute; left: 43%; top: 10%; width: 22%; height: 30%;"
                                        onclick="updateMapImage('Jakarta Pusat')"></div>

                                    <!-- Jakarta Utara -->
                                    <div class="cursor-pointer"
                                        style="position: absolute; left: 65%; width: 36%; height: 30%;"
                                        onclick="updateMapImage('Jakarta Utara')"></div>

                                    <!-- Jakarta Timur -->
                                    <div class="cursor-pointer"
                                        style="position: absolute; left: 65%; top: 30%; width: 36%; height: 70%;"
                                        onclick="updateMapImage('Jakarta Timur')"></div>

                                    <!-- Jakarta Selatan -->
                                    <div class="cursor-pointer"
                                        style="position: absolute; left: 20%; top: 40%; width: 45%; height: 55%;"
                                        onclick="updateMapImage('Jakarta Selatan')"></div>
                                </div>
                            </div>

                            <div class="w-full md:w-1/2 flex flex-col gap-3 ">
                                @foreach ($location_list as $loc)
                                    <div class="location-text text-[18px] md:text-2xl cursor-pointer font-bold  text-white opacity-60 hover:opacity-100 "
                                        onclick="updateMapImage('{{ $loc }}')">
                                        {{ $loc }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="overflow-hidden bg-yellow-300 whitespace-nowrap">
            <div class="marquee-wrapper">
                <div class="flex">
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                </div>
                <div class="flex">
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                </div>
                <div class="flex">
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                    <span class="mx-4 text-blue-800 font-bold text-lg">Inspirasi Menyala, Ga Perlu Ngebul</span>
                </div>
            </div>
        </div>
        <div class="text-center py-20">
            <h1 class=" ultraprint-font uppercase p-3 text-4xl md:text-5xl rounded-2xl text-[#0353FF] font-normal">
                Event Documentation</h1>

            <!-- Slider wrapper -->
            <div class="w-full p-20">
                <div class="swiper gallerySwiper">
                    <div class="swiper-wrapper">

                        @foreach ($galleries as $gallery)
                            @if ($gallery->thumbnail)
                                <a href="{{ route('warkop.gallery.show', $gallery->slug) }}" class="swiper-slide block">
                                    <div class="relative w-full aspect-video ">
                                        <img src="{{ asset('storage/' . $gallery->thumbnail) }}"
                                            alt="{{ $gallery->title }}"
                                            class="absolute inset-0 w-full h-full object-cover rounded-3xl"
                                            loading="lazy" />
                                    </div>
                                </a>
                            @endif
                        @endforeach

                    </div>

                    <!-- Controls (optional) -->
                    @if (count($galleries) > 0)
                        <div class="swiper-button-prev "></div>
                        <div class="swiper-button-next"></div>
                    @endif
                </div>
            </div>


            <a href="{{ url('/warkop-raw/gallery') }}">
                <button type="button"
                    class="btn btn-primary rounded-2xl cursor-pointer text-[18px] bg-[#0353FF] text-white inline-block px-4 py-2">
                    See Details
                </button>
            </a>
        </div>

        <dialog id="dialog" class="p-0 rounded-lg  m-auto">
            <div class="bg-white rounded-lg shadow-lg w-[400px] max-w-[90vw]">
                <div id="dlg-body"></div>
            </div>
        </dialog>

    </div>

    <style>
        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        dialog::backdrop {
            background-color: rgba(0, 0, 0, 0.372);

            /* Tailwind utility classes via @apply */
        }

        #map-overlay {
            pointer-events: none;
            /* Ensure overlay doesn't block clicks */
            position: absolute;
            /* Ensure it's above the image */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 40;
            /* Make sure it's above the image but not interfering with clicks */
        }

        .marquee-wrapper {
            display: flex;
            width: 200%;
            /* Important: double width for seamless scroll */
            animation: marquee 20s linear infinite;
        }

        .swiper-button-prev,
        .swiper-button-next {
            color: white;
        }

        .swiper-button-prev::after,
        .swiper-button-next::after {
            font-size: 20px
        }



        .swiper-pagination-bullet {
            background-color: white;
            opacity: 1;
            width: 11px;
            height: 11px;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            width: 20px;
            height: 20px;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #444;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .dot {
            position: absolute;
            width: 10px;
            height: 10px;
            background: red;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none;
        }
    </style>

    @if (Route::is('warkop'))
        <script>
            // dialog logic
            const dialog = document.getElementById('dialog');

            dialog.addEventListener('click', (e) => {
                const rect = dialog.getBoundingClientRect();
                const inside = (
                    rect.top <= e.clientY && e.clientY <= rect.top + rect.height &&
                    rect.left <= e.clientX && e.clientX <= rect.left + rect.width
                );
                if (!inside) {
                    dialog.close();
                }
            });

            // component
            const mapImage = document.getElementById('warkop_map');
            const overlay = document.getElementById('map-overlay');
            const hubBtns = document.querySelectorAll('.location-btn');
            const dialogEl = document.getElementById('dialog');
            const storageBaseUrl = "{{ asset('storage') }}/";

            // preload once
            const DATA = @json($warloc ?? [], JSON_UNESCAPED_UNICODE);

            let selectedBtnValue = 'RAWplace';
            let lastSelectedLocation = null;

            // Single-select hub buttons + rerender
            hubBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    selectedBtnValue = btn.value;

                    hubBtns.forEach(b => {
                        b.classList.remove('bg-[#FF5632]');
                        b.classList.add('bg-transparent');
                    });
                    btn.classList.remove('bg-transparent');
                    btn.classList.add('bg-[#FF5632]');

                    if (lastSelectedLocation) updateMapImage(lastSelectedLocation);
                });
            });

            // Dialog helpers
            function openModalForItem(item) {
                if (!dialogEl) return;
                document.getElementById('dlg-body').innerHTML = `
        <div><img class=" max-h-[200px] w-full object-cover" src="${storageBaseUrl}${item.thumbnail}"/> </div>
        <div class="p-5 bg-white">
            <a class="hover:border-b-2 border-[#0353FF]" href="${item.loc_link}" target="_blank">
                <h1 class="ultraprint-font inline-block uppercase text-[18px] md:text-[21px]  rounded-2xl mb-2 text-[#0353FF] font-medium">
                    ${item.title ?? 'Warkop'}
                </h1>
                </a>
            <h4 class=" text-[12px] md:text-[16px] font-normal ">
                ${item.street_loc ?? 'Street Address'}
            </h4>
        </div>
      `;
                dialogEl.showModal();
            }

            function setActiveLocationText(selectedLocation) {
                document.querySelectorAll('.location-text').forEach(el => {
                    const isActive = el.textContent.trim() === selectedLocation;
                    el.classList.toggle('opacity-100', isActive);
                    el.classList.toggle('opacity-60', !isActive);
                });
            }

            function swapMapImage(selectedLocation) {


                const srcMap = {
                    'Jakarta Utara': "{{ asset('assets/img/warkop_place/jakarta_utara.webp') }}",
                    'Jakarta Barat': "{{ asset('assets/img/warkop_place/jakarta_barat.webp') }}",
                    'Jakarta Pusat': "{{ asset('assets/img/warkop_place/jakarta_pusat.webp') }}",
                    'Jakarta Timur': "{{ asset('assets/img/warkop_place/jakarta_timur.webp') }}",
                    'Jakarta Selatan': "{{ asset('assets/img/warkop_place/jakarta_selatan.webp') }}",
                };
                const nextSrc = srcMap[selectedLocation] ?? "{{ asset('assets/img/warkop_place/all-location.webp') }}";
                // fade out
                mapImage.classList.add('opacity-0');
                mapImage.classList.remove('opacity-100');

                // preload next image
                const loader = new Image();
                loader.onload = () => {
                    mapImage.src = nextSrc;
                    // fade back in with delay
                    setTimeout(() => {
                        mapImage.classList.remove('opacity-0');
                        mapImage.classList.add('opacity-100');
                    }, 300); // small delay (50–100ms usually enough)
                };
                loader.src = nextSrc;
            }

            function renderDots(location, hub) {
                // Make sure overlay itself can receive events
                overlay.style.pointerEvents = 'auto';

                overlay.innerHTML = '';
                DATA.forEach(item => {
                    if (
                        item.location === location &&
                        (!hub || item.type_hub === hub) &&
                        item.x != null && item.y != null
                    ) {
                        // Wrapper for dot + tooltip
                        const wrapper = document.createElement('div');
                        wrapper.className = 'group cursor-pointer'; // for group-hover
                        Object.assign(wrapper.style, {
                            position: 'absolute',
                            left: `${parseFloat(item.x) * 100}%`,
                            top: `${parseFloat(item.y) * 100}%`,
                            transform: 'translate(-50%, -50%)',
                            pointerEvents: 'auto',
                            backgroundColor:'red',
                            zIndex: '50',
                        });

                        // Dot (use inline size to avoid Tailwind scale issues)
                        const dot = document.createElement('div');
                        dot.className =
                            'dot transition-opacity duration-300 ease-in-out opacity-0 rounded-full cursor-pointer ring-2 ring-white/70 shadow';
                        Object.assign(dot.style, {
                            width: '10px',
                            height: '10px',
                            backgroundColor: 'red',
                            pointerEvents: 'auto',
                        });

                        // Tooltip
                        const tooltip = document.createElement('span');
                        tooltip.textContent = item.title ?? 'Warkop';
                        tooltip.className = `
                            absolute bottom-full left-1/2 -translate-x-1/2 mb-2
                            px-2 py-1 text-xs font-medium text-white bg-gray-900 rounded-lg shadow
                            opacity-0 group-hover:opacity-100 transition-opacity duration-200
                            whitespace-nowrap pointer-events-none
                        `;

                        // Optional: small arrow under the tooltip
                        const tipArrow = document.createElement('span');
                        tipArrow.className = `
                            absolute left-1/2 -translate-x-1/2
                            w-2 h-2 bg-red rotate-45
                            opacity-0 group-hover:opacity-100 transition-opacity duration-200
                        `;
                        tipArrow.style.top = '-4px'; // sits just above the dot

                        // Click handler
                        wrapper.addEventListener('click', (e) => {
                            e.stopPropagation();
                            openModalForItem(item);
                        });

                        // Append and animate
                        wrapper.appendChild(dot);
                        wrapper.appendChild(tooltip);
                        wrapper.appendChild(tipArrow);
                        overlay.appendChild(wrapper);

                        setTimeout(() => {
                            dot.classList.remove('opacity-0');
                            dot.classList.add('opacity-100');
                        }, 300);
                    }
                });
            }



            // Main entry
            function updateMapImage(selectedLocation) {
                lastSelectedLocation = selectedLocation;
                document.getElementById('overlay_select').style.display = 'none';
                let locBtn = document.getElementById('location-buttons');

                // UI bits
                setActiveLocationText(selectedLocation);

                locBtn.hidden = false; // makes it renderable
                requestAnimationFrame(() => {
                    locBtn.classList.remove('opacity-0');
                    locBtn.classList.add('opacity-100');
                });

                // Render
                renderDots(selectedLocation, selectedBtnValue);
                swapMapImage(selectedLocation);
            }

            // Expose to inline onclicks
            window.updateMapImage = updateMapImage;
        </script>
    @endif
@endsection
