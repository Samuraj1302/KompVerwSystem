<?php

namespace App\Filament\Resources\KategorienResource\Pages;

use App\Filament\Resources\KategorienResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategorien extends EditRecord
{
    protected static string $resource = KategorienResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
