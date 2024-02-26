<?php

namespace App\Filament\Resources\KategorienResource\Pages;

use App\Filament\Resources\KategorienResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriens extends ListRecords
{
    protected static string $resource = KategorienResource::class;

    protected static ?string $title = "Kategorien";

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
