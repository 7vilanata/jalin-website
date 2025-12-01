<?php

namespace App\Livewire;

use App\Models\SocialMedia as ModelsSocialMedia;
use Livewire\Component;

class SocialMedia extends Component
{

    public $campaign_type;

    public function mount($campaign_type = null)
    {
        $this->campaign_type = $campaign_type;
    }
    public function render()
    {
        // Base query for fetching social media posts
        $query = ModelsSocialMedia::where('is_published', true);

        // Fetch TikTok posts
        $socmedTiktok = $query->clone()->where('socmed_type', 'Tiktok')
            ->when($this->campaign_type, function($query) {
                return $query->where('campaign_type', $this->campaign_type);
            })
            ->orderBy('publish_date', 'desc')
            ->limit(2)
            ->get();

        // Fetch Instagram posts
        $socmedInsta = $query->clone()->where('socmed_type', 'Instagram')
            ->when($this->campaign_type, function($query) {
                return $query->where('campaign_type', $this->campaign_type);
            })
            ->orderBy('publish_date', 'desc')
            ->limit(2)
            ->get();


        // Return the filtered or full data to the view
        return view('livewire.social-media', compact('socmedTiktok', 'socmedInsta'));
    }
}
