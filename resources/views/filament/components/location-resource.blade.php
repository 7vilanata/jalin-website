<div style="margin-bottom: 20px">
    <h1 style="margin-bottom: 30px">
        Choose Warkop Location (click a spot in the image) 
    </h1>

    <label for="custom-location"> Location</label>
    <select id="custom-location" class="styled-select" wire:model="data.location" value="{{ $record->location ?? '-' }}">
         <option value="" disabled selected>-- Choose One --</option>
        <option value="Jakarta Utara">Jakarta Utara</option>
        <option value="Jakarta Barat">Jakarta Barat</option>
        <option value="Jakarta Pusat">Jakarta Pusat</option>
        <option value="Jakarta Timur">Jakarta Timur</option>
        <option value="Jakarta Selatan">Jakarta Selatan</option>
    </select>
</div>

<span style="color: red; font-size:12px">*Pick thumbnail first before selecting location dot</span>
<div class="relative w-[300px] h-[500px]">

    <img id="location-map" src="{{ asset('assets/img/warkop_place/all-location.webp') }}"
        class="w-full h-full  cursor-pointer" alt="Location Map">
    <div class="absolute top-0 left-0  z-10 opacity-25" id="map-overlay"></div>
</div>

<input type="hidden" name="location" id="location" wire:model="data.location" value="{{ $record->location ?? '-' }}">
<!-- Hidden fields to store the coordinates -->
<input type="hidden" name="x" id="x" wire:model="data.x" value="{{ $record->x ?? 0 }}">
<input type="hidden" name="y" id="y" wire:model="data.y" value="{{ $record->y ?? 0 }}">

<style>
    .styled-select {
        appearance: none;
        background-color: black;
        border-radius: 10px;
        width: 100%;
        font-size: 16px;
        color: white;
        height: 40px;
    }

    .styled-select option {
        background-color: black;
        border-radius: 5px;
        padding: 10px;
    }

    .styled-select:focus {
        border-color: #333;
    }

    /* For a more custom look (like a custom arrow for dropdown) */
    .styled-select::-ms-expand {
        display: none;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mapImage = document.getElementById('location-map');
        const overlay = document.getElementById('map-overlay');
        const locationSelect = document.getElementById('custom-location');

        let currentDot = null;

        // Get the Filament form component instances
        const xInput = document.querySelector('input[name="x"]');
        const yInput = document.querySelector('input[name="y"]');


        setTimeout(function() {
            updateMapImage(locationSelect.value);

            // Position the saved dot on the map if coordinates exist
            if (xInput && yInput && xInput.value !=0 && yInput.value!=0) {
                const xPercentage = parseFloat(xInput.value);
                const yPercentage = parseFloat(yInput.value);

                // Create the dot at the saved position
                const dot = document.createElement('div');
                dot.classList.add('dot');
                dot.style.position = 'absolute';
                dot.style.left = `${xPercentage * 100}%`; // Using percentage of width
                dot.style.top = `${yPercentage * 100}%`; // Using percentage of height
                dot.style.width = '10px';
                dot.style.height = '10px';
                dot.style.backgroundColor = 'red';
                dot.style.borderRadius = '50%';
                dot.style.transform = 'translate(-50%, -50%)'; // Center the dot on the position
                dot.style.pointerEvents = 'none'; // Prevent the dot from blocking clicks

                overlay.appendChild(dot);
                currentDot = dot;
            }
        }, 100);

        // Function to update the map image based on the selected location
        function updateMapImage(selectedLocation) {
            if (selectedLocation === 'Jakarta Utara') {
                mapImage.src = "{{ asset('assets/img/warkop_place/jakarta_utara.webp') }}";
            } else if (selectedLocation === 'Jakarta Barat') {
                mapImage.src = "{{ asset('assets/img/warkop_place/jakarta_barat.webp') }}";
            } else if (selectedLocation === 'Jakarta Pusat') {
                mapImage.src = "{{ asset('assets/img/warkop_place/jakarta_pusat.webp') }}";
            } else if (selectedLocation === 'Jakarta Timur') {
                mapImage.src = "{{ asset('assets/img/warkop_place/jakarta_timur.webp') }}";
            } else if (selectedLocation === 'Jakarta Selatan') {
                mapImage.src = "{{ asset('assets/img/warkop_place/jakarta_selatan.webp') }}";
            } else {
                mapImage.src = "{{ asset('assets/img/warkop_place/all-location.webp') }}"; // Default image
            }

            // Update the Filament/Livewire property
            const livewireInput = locationSelect; // This select is bound with wire:model="data.location"
            livewireInput.value = selectedLocation;

            // Trigger Livewire to pick up the change
            livewireInput.dispatchEvent(new Event('input', {
                bubbles: true
            }));
        }

        // Add an event listener to the select element for the 'change' event
        locationSelect.addEventListener('change', (event) => {
            console.log('Select value changed:', event.target.value); // Logs the new selected value
            updateMapImage(event.target.value); // Update the map image based on the new selected value
        });


        // Add click listener to update coordinates and position the dot
        mapImage.addEventListener('click', function(event) {
            const mapRect = mapImage.getBoundingClientRect();

            // Calculate percentages
            const xPercentage = ((event.clientX - mapRect.left) / mapRect.width).toFixed(4);
            const yPercentage = ((event.clientY - mapRect.top) / mapRect.height).toFixed(4);

            console.log("Coordinates:", xPercentage, yPercentage);

            // Update Filament form fields
            if (xInput && yInput) {
                // Set the values directly
                xInput.value = xPercentage;
                yInput.value = yPercentage;

                // Dispatch input events to notify Livewire of the change
                xInput.dispatchEvent(new Event('input', {
                    bubbles: true
                }));
                yInput.dispatchEvent(new Event('input', {
                    bubbles: true
                }));
            }

            // Remove previous dot
            if (currentDot && overlay.contains(currentDot)) {
                overlay.removeChild(currentDot);
            }

            // Create new dot
            const dot = document.createElement('div');
            dot.classList.add('dot');
            dot.style.position = 'absolute';
            dot.style.left = `${xPercentage * 100}%`;
            dot.style.top = `${yPercentage * 100}%`;
            dot.style.width = '10px';
            dot.style.height = '10px';
            dot.style.backgroundColor = 'red';
            dot.style.borderRadius = '50%';
            dot.style.transform = 'translate(-50%, -50%)';
            dot.style.pointerEvents = 'none';

            overlay.appendChild(dot);
            currentDot = dot;
        });
    });
</script>

<style>
    .dot {
        cursor: pointer;
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
        z-index: 10;
        /* Make sure it's above the image but not interfering with clicks */
    }

    #location-map {
        cursor: pointer;
        /* Ensure the image is clickable */
    }
</style>
