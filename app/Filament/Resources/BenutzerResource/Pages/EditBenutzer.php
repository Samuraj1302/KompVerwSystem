<?php

namespace App\Filament\Resources\BenutzerResource\Pages;

use App\Filament\Resources\BenutzerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBenutzer extends EditRecord
{
    protected static string $resource = BenutzerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
