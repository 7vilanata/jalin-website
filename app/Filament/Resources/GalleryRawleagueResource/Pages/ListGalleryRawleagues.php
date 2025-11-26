<?php

namespace App\Filament\Resources\GalleryRawleagueResource\Pages;

use App\Filament\Resources\GalleryRawleagueResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGalleryRawleagues extends ListRecords
{
    protected static string $resource = GalleryRawleagueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
