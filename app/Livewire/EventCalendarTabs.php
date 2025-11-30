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
            'date' => 'Desember 2025',
            'description' => 'Buka kesempatan buat semua peserta yang mau join kompetisi Futsal, Mobile Legends, dan Band Competition. Pastikan tim lo daftar sebelum slotnya habis.
            <br><br>
            Timeline detail:
            <ul class="list-disc ml-8">
                <li>
                Registration Open — Desember 2025
                </li>
                <li>
                27 Desember 2025: Penutupan pendaftaran Mobile Legends
                </li>
                <li>
                30 Desember 2025: Penutupan pendaftaran Futsal
                </li>
                <li>
                31 Desember 2025: Penutupan pendaftaran Band Competition
                </li>
            </ul>',
        ],
        [
            'id' => 'technical_meeting',
            'title' => 'Technical Meeting',
            'date' => '30 Des & 3 Jan 2026',
            'description' => 'Briefing buat semua peserta. Rules, sistem pertandingan, sampai teknis perlombaan bakal dibahas di sini. Pastikan perwakilan tim wajib hadir.
            <br><br>
            Detail:
            <ul class="list-disc ml-8">
                <li>
                30 Desember 2025: Technical Meeting MLBB (via Zoom)
                </li>
                <li>
                3 Januari 2026: Technical Meeting Futsal
                </li>
            </ul>',
        ],
        [
            'id' => 'mobile_legends',
            'title' => 'Mobile Legends Competition',
            'date' => '3–4 Januari 2026',
            'description' => 'Saatnya battle. Tunjukkan strategi, mekanik, teamwork, dan mental lo di arena.
            <br><br>
            <a href="/raw-league/leaderboard"
                class="terms-btn text-white text-[14px] rounded-lg font-bold px-5 py-2.5 text-center me-2 mb-2 bg-[#FF5632] hover:scale-110 ease-in-out">
                Lihat Bagan
            </a>',
        ],
        [
            'id' => 'futsal',
            'title' => 'Futsal Competition ',
            'date' => '10 – 11 Januari 2026',
            'description' => 'Gerak cepat, main rapih, dan kasih yang terbaik. Energi lapangan bakal panas  cuma satu tim yang bisa pulang dengan gelar juara.
            <br><br>
            <a href="/raw-league/leaderboard"
                class="terms-btn text-white text-[14px] rounded-lg font-bold px-5 py-2.5 text-center me-2 mb-2 bg-[#FF5632] hover:scale-110 ease-in-out">
                Lihat Bagan
            </a>',
        ],
        [
            'id' => 'raw_festival',
            'title' => 'RAW Festival',
            'date' => '24 Januari 2026',
            'description' => 'Puncak dari seluruh rangkaian acara: awarding, penampilan band, celebration mode ON. Di sini semuanya menyatu kompetisi, komunitas, dan vibe yang ngebangun momentum tahun ini.',
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
