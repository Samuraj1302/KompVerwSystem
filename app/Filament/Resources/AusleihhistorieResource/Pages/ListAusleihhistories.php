<?php

namespace App\Filament\Resources\AusleihhistorieResource\Pages;

use App\Filament\Resources\AusleihhistorieResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAusleihhistories extends ListRecords
{
    protected static string $resource = AusleihhistorieResource::class;

    protected static ?string $title = "Ausleihhistorie";

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
