<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {

        $schedules = Schedule::query()
            ->where('is_published', true)
            ->orderBy('schedule_date', 'desc')
            ->paginate(10);

        $location_list = [
            'all' => 'All Schedule',
            'Jakarta Utara' => 'Jakarta Utara',
            'Jakarta Barat' => 'Jakarta Barat',
            'Jakarta Pusat' => 'Jakarta Pusat',
            'Jakarta Timur' => 'Jakarta Timur',
            'Jakarta Selatan' => 'Jakarta Selatan',
        ];

        return view('warkop.schedule.index', compact('schedules', 'location_list'));
    }

    public function filter(Request $request)
    {
        $location = $request->get('location');

        // Filter schedules based on location
        $schedules = Schedule::query()
            ->where('is_published', true)
            ->when($location !== 'all', function ($query) use ($location) {
                return $query->where('location', $location);
            })
            ->orderBy('schedule_date', 'desc')
            ->paginate(10);

        // Prepare the HTML for each schedule card using the Blade component
        $html = '';

        foreach ($schedules as $schedule) {
            // Render the component as HTML for each schedule and append it to the $html string
            $html .= view('components.schedule-card', [
                'type_hub' => $schedule->type_hub,
                'title' => $schedule->title,
                'subtitle' => $schedule->subtitle,
                'slug' => route('warkop.schedule.show', $schedule->slug),
                'location' => $schedule->location,
                'street_loc' => $schedule->street_loc,
                'image' => asset('storage/' . $schedule->thumbnail),
                'schedule_date' => $schedule->schedule_date,
                'start_time' => $schedule->start_time,
                'date_parts' => explode('-', $schedule->schedule_date),
                'month_name' => \Carbon\Carbon::parse($schedule->schedule_date)->format('F'),
            ])->render();  // Render the component to HTML
        }

        $pagination = [
            'current_page' => $schedules->currentPage(),
            'last_page' => $schedules->lastPage(),
            'next_page_url' => $schedules->nextPageUrl(),
            'prev_page_url' => $schedules->previousPageUrl(),
            'total' => $schedules->total(),
            'per_page' => $schedules->perPage(),
        ];

        // Return the HTML to the client as JSON
        return response()->json([
            'html' => $html,
            'pagination' => $pagination,  // Pass pagination metadata instead of HTML links
        ]);
    }





    public function show($slug)
    {
        $schedule = Schedule::where('slug', $slug)->firstOrFail();

        $schedules = Schedule::where('slug', '!=', $slug)
            ->get();


        return view('warkop.schedule.show', compact('schedule', 'schedules'));
    }
}
