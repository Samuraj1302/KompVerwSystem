<?php

namespace App\Filament\Resources\KomponentenResource\Pages;

use App\Filament\Resources\KomponentenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKomponentens extends ListRecords
{
    protected static string $resource = KomponentenResource::class;

    protected static ?string $title = "Komponenten";

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
