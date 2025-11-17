<?php

namespace App\Livewire;

use Livewire\Component;

class EventCalendarTabs extends Component
{
    public $selectedEvent = 'registrasi';

    public $events = [
        [
            'id' => 'registrasi',
            'title' => 'Registrasi',
            'date' => '01 Juni - 24 Juli 2025',
            'description' => 'Siapin diri lo bukan cuma buat main, tapi buat jadi bagian dari sejarahnya RAW Festival 2026!',
        ],
        [
            'id' => 'pertandingan',
            'title' => 'Pertandingan',
            'date' => '01 Agustus - 24 September 2025',
            'description' => 'Saatnya buktiin skill lo dan ngerasain serunya kompetisi bareng tim dari berbagai sekolah!',
        ],
        [
            'id' => 'regional',
            'title' => 'Pertandingan Regional',
            'date' => '06 - 13 September 2025',
            'description' => 'Masuk babak penentuan! Waktunya adu mental, strategi, dan kekompakan buat rebut tiket ke Grand Final!',
        ],
        [
            'id' => 'grand_final',
            'title' => 'Grand Final',
            'date' => '11 Oktober 2025',
            'description' => 'Ini dia puncaknya! Tim terbaik dari seluruh daerah bakal ketemu dan adu gengsi buat jadi juara sejati!',
        ],
        [
            'id' => 'raw_festival',
            'title' => 'RAW Festival',
            'date' => '11 Februari 2025',
            'description' => 'Semua perjuangan lo bakal sampai di sini — di panggung terbesar RAW Festival 2026. Seru, rame, dan penuh vibe positif!',
        ],
    ];

    public function render()
    {
        return view('livewire.event-calendar-tabs');
    }

    public function setSelectedEvent($eventId)
    {
        $this->selectedEvent = $eventId;
    }
}
