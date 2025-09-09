<div class="container my-10">
    @if (session()->has('success'))
        <div id="success-alert"
            class="fixed top-20 right-5 z-[9999] bg-green-500 text-white p-4 rounded-2xl shadow-lg flex items-center justify-between space-x-2"
            style="min-width: 250px; opacity:1; transition: opacity 0.5s ease;">
            <span>{{ session('success') }}</span>
            <button onclick="closeSuccessAlert()"
                class="ml-4 font-bold text-white hover:text-gray-200 focus:outline-none">
                ✕
            </button>
        </div>
    @endif

    <form wire:submit.prevent="submit"
        class="p-5 md:p-20 text-[#0353FF] bg-white shadow-[0px_0px_50px_0px_#00000036] rounded-2xl">
        @csrf
        <div class="mb-5 flex flex-col gap-3">
            <label for="name" class="form-label font-bold">Nama <span
                    class="text-[#FF5632] font-bold">*</span></label>
            <input type="text" class="form-control border-2 p-1 text-gray-500 border-[#00000026] rounded-2xl"
                id="name" wire:model="name" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-5 flex flex-col gap-3">
            <label for="email" class="form-label font-bold">E-mail <span
                    class="text-[#FF5632] font-bold">*</span></label>
            <input type="email" class="form-control border-2 p-1 text-gray-500 border-[#00000026] rounded-2xl"
                id="email" wire:model="email" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-5 flex flex-col gap-3">
            <label for="instansi" class="form-label font-bold">Instansi</label>
            <input type="text" class="form-control border-2 p-1 text-gray-500 border-[#00000026] rounded-2xl"
                id="instansi" wire:model="instansi">
            @error('instansi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-5 flex flex-col gap-3">
            <div class="flex flex-col">
                <label for="message" class="form-label font-bold">Pesan <span
                        class="text-[#FF5632] font-bold">*</span></label>
                <small class="form-text text-gray-400">maximum 200 characters</small>
            </div>
            <textarea class="form-control border-2 p-1 text-gray-500 border-[#00000026] rounded-2xl" id="message"
                wire:model="message" rows="10" maxlength="200" required oninput="updateCounter()"></textarea>
            <div id="char-counter" class="text-sm text-gray-400 text-right">200 characters remaining</div>
            @error('message')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary rounded-2xl bg-[#0353FF] text-white inline-block px-4 py-2"
            wire:loading.attr="disabled">
            <span wire:loading.remove>Submit</span>
            <span wire:loading>
                <svg class="animate-spin h-5 w-5 text-white mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                        d="M4 12h16"></path>
                </svg>
            </span>
        </button>
    </form>

</div>

<script>
    function closeSuccessAlert() {
        const alert = document.getElementById('success-alert');
        if (alert) {
            alert.style.opacity = 0;
            setTimeout(() => alert.remove(), 500);
        }
    }
    setTimeout(() => {
        closeSuccessAlert();
    }, 1000);

    function updateCounter() {
        const messageText = document.getElementById('message').value;
        const remaining = 200 - messageText.length;
        const counter = document.getElementById('char-counter');
        counter.textContent = `${remaining} characters remaining`;
    }
</script>
