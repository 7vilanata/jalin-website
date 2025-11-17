<?php

namespace App\Filament\Resources\SponsorAndPresenterResource\Pages;

use App\Filament\Resources\SponsorAndPresenterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSponsorAndPresenter extends EditRecord
{
    protected static string $resource = SponsorAndPresenterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
