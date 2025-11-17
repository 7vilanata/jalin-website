<?php

namespace App\Filament\Resources\SponsorAndPresenterResource\Pages;

use App\Filament\Resources\SponsorAndPresenterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSponsorAndPresenters extends ListRecords
{
    protected static string $resource = SponsorAndPresenterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
