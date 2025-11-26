<?php

namespace App\Filament\Resources\GalleryRawleagueResource\Pages;

use App\Filament\Resources\GalleryRawleagueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGalleryRawleague extends EditRecord
{
    protected static string $resource = GalleryRawleagueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
