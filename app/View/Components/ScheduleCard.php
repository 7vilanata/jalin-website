<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ScheduleCard extends Component
{
    public $title;
    public $subtitle;
    public $slug;
    public $type_hub;
    public $location;
    public $street_loc;
    public $image;
    public $schedule_date;
    public $start_time;
    public $date_parts;
    public $month_name;


    public function __construct($title, $subtitle, $slug, $typehub, $location, $streetloc,  $image = null, $scheduledate, $starttime)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->slug = $slug;
        $this->type_hub = $typehub;
        $this->location = $location;
        $this->street_loc = $streetloc;
        $this->image = $image;
        $this->schedule_date = $scheduledate;
        $this->start_time = $starttime;

        $this->date_parts = explode('-', $this->schedule_date);

        $months = [
            '01' => 'January', '02' => 'February', '03' => 'March', '04' => 'April',
            '05' => 'May', '06' => 'June', '07' => 'July', '08' => 'August',
            '09' => 'September', '10' => 'October', '11' => 'November', '12' => 'December'
        ];

         $this->month_name = isset($months[$this->date_parts[1]]) ? $months[$this->date_parts[1]] : $this->date_parts[1];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
         return view('components.schedule-card', [
            'date_parts' => $this->date_parts, 
            'month_name' => $this->month_name, // Pass the text month name to the view
        ]);
    }
}
