<div class="flex gap-5 justify-center flex-wrap p-4">
   
    @if (!$socmedTiktok->isEmpty())
        @foreach ($socmedTiktok as $tiktok)
            <a href="{{ $tiktok->socmed_link }}" target="_blank">
                <img class="h-[450px]" src="{{ asset('storage/' . $tiktok->thumbnail) }}" alt="Watch on TikTok">
            </a>
        @endforeach
    @endif
    @if (!$socmedInsta->isEmpty())
        @foreach ($socmedInsta as $insta)
            <a href="{{ $insta->socmed_link }}" target="_blank">
                <img class="h-[450px] " src="{{ asset('storage/' . $insta->thumbnail) }}" alt="Watch on TikTok">
            </a>
        @endforeach
    @endif
</div>
<style>
    .instagram-media {
        max-width: 22% !important;
        height: 571px !important;
        width: 100% !important;
    }
</style>
