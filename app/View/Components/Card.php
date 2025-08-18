<?php

// app/View/Components/Card.php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    // Declare properties that the component will accept
    public $campaign;
    public $title;
    // public $content;
    public $image;
    public $link;

    // Constructor to accept data via the component
    public function __construct($campaign, $title,  $image = null, $link = null)
    {
        $this->campaign = $campaign;
        $this->title = $title;
        // $this->content = $content;
        $this->image = $image;
        $this->link = $link;
    }

    // Render the component's Blade view
    public function render()
    {
        return view('components.card');
    }
}
