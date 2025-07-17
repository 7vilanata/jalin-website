<?php

namespace App\Livewire;

use Livewire\Component;

class FeatureList extends Component
{
    public $features;

    public function mount()
    {
        // Sample data for features
        $this->features = [
            ['title' => 'Feature One', 'description' => 'Description of feature one.'],
            ['title' => 'Feature Two', 'description' => 'Description of feature two.'],
            ['title' => 'Feature Three', 'description' => 'Description of feature three.'],
        ];
    }

    public function render()
    {
        return view('livewire.feature-list');
    }
}
