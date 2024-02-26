<?php

namespace App\Filament\Resources\LagerortResource\Pages;

use App\Filament\Resources\LagerortResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLagerorts extends ListRecords
{
    protected static string $resource = LagerortResource::class;

    protected static ?string $title = "Lagerort";

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
