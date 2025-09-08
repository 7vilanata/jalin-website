<?php

namespace App\Filament\Resources\WarkopLocationResource\Pages;

use App\Filament\Resources\WarkopLocationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Form;

class EditWarkopLocation extends EditRecord
{
    protected static string $resource = WarkopLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave()
    {
        // After saving, redirect back to the same page
        return redirect()->route('filament.support_admin.resources.warkop-locations.edit', [
            'record' => $this->record->id
        ]);
    }
}
