<?php

namespace App\Filament\Resources\LagerortResource\Pages;

use App\Filament\Resources\LagerortResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLagerort extends EditRecord
{
    protected static string $resource = LagerortResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
