<?php

namespace App\Filament\Resources\SocmedResource\Pages;

use App\Filament\Resources\SocmedResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSocmeds extends ListRecords
{
    protected static string $resource = SocmedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
