<?php

namespace App\Filament\Resources\SocmedResource\Pages;

use App\Filament\Resources\SocmedResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSocmed extends EditRecord
{
    protected static string $resource = SocmedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
