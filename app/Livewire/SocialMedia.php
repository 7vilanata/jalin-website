<?php

namespace App\Livewire;

use App\Models\SocialMedia as ModelsSocialMedia;
use Livewire\Component;

class SocialMedia extends Component
{
    public function render()
    {
        $socmedTiktok = ModelsSocialMedia::where('is_published', true)
        ->where('socmed_type', 'Tiktok')
        ->orderBy('publish_date', 'desc')
        ->limit(2)->get();

        $socmedInsta = ModelsSocialMedia::where('is_published', true)
        ->where('socmed_type', 'Instagram')
        ->orderBy('publish_date', 'desc')
        ->limit(2)->get();

        return view('livewire.social-media', compact('socmedTiktok','socmedInsta'));
    }
}
