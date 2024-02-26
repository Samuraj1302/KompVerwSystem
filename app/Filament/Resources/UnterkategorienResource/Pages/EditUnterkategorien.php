<?php

namespace App\Filament\Resources\UnterkategorienResource\Pages;

use App\Filament\Resources\UnterkategorienResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUnterkategorien extends EditRecord
{
    protected static string $resource = UnterkategorienResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
