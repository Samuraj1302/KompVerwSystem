<?php

namespace App\Filament\Resources\KomponentenResource\Pages;

use App\Filament\Resources\KomponentenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKomponenten extends EditRecord
{
    protected static string $resource = KomponentenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
