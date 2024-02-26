<?php

namespace App\Filament\Resources\AusleihhistorieResource\Pages;

use App\Filament\Resources\AusleihhistorieResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAusleihhistorie extends EditRecord
{
    protected static string $resource = AusleihhistorieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
