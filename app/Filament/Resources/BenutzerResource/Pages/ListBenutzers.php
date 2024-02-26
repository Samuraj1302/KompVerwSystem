<?php

namespace App\Filament\Resources\BenutzerResource\Pages;

use App\Filament\Resources\BenutzerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBenutzers extends ListRecords
{
    protected static string $resource = BenutzerResource::class;

    protected static ?string $title = "Benutzer";

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
