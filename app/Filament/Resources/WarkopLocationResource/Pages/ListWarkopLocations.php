<?php

namespace App\Filament\Resources\WarkopLocationResource\Pages;

use App\Filament\Resources\WarkopLocationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWarkopLocations extends ListRecords
{
    protected static string $resource = WarkopLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
