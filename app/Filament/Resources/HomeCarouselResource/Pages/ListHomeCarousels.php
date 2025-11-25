<?php

namespace App\Filament\Resources\HomeCarouselResource\Pages;

use App\Filament\Resources\HomeCarouselResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeCarousels extends ListRecords
{
    protected static string $resource = HomeCarouselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
